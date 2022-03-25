<?php

/**
 * 勝ったら次も同じ手を出す戦略を表すクラス
 */
class WinningStrategy implements Strategy
{
    /**
     * Undocumented variable
     *
     * @var Random
     */
    private $random;

    /**
     * Undocumented variable
     *
     * @var bool
     */
    private $won = false;

    /**
     * Undocumented variable
     *
     * @var Hand
     */
    private $prevHand;

    public function WinningStrategy(int $seed)
    {
        $this->random = rand(0, $seed);
    }

    public function nextHand() : Hand
    {
        if (!$this->won) {
            $hand = new Hand(rand(0, 2));
            $this->prevHand = $hand->getHand(rand(0, 2));
        }
        return $this->prevHand;
    }

    public function study(bool $win) : void
    {
        $this->won = $win;
    }
}
