<?php

/**
 * 1回前の手から次の手を確率的に計算する戦略を表すクラス
 */
class ProbStrategy implements Strategy
{
    private $random;
    private $prevHandValue = 0;
    private $currentHandValue = 0;

    private $history = [
        [1, 1, 1],
        [1, 1, 1],
        [1, 1, 1]
    ];

    public function __construct(int $seed)
    {
        $this->random = rand(0, $seed);
    }

    public function nextHand() : Hand
    {
        $bet = rand($this->getSum($this->currentHandValue));
        $handValue = 0;

        if ($bet < $this->history[$this->currentHandValue][0]) {
            $handValue = 0;
        } elseif ($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]) {
            $handValue = 1;
        } else {
            $handValue = 2;
        }
        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $handValue;
        return $hand->getHand($handValue);
    }

    public function study(bool $win) : void
    {
        if ($win) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }

    private function getSum(int $hv)
    {
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }
}
