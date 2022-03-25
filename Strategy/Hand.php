<?php

/**
 * じゃんけんの「手」を表すクラス
 */
class Hand
{
    /**
     * @var int グーを表す値
     */
    const HANDVALUE_GUU = 0;

    /**
     * @var int チョキを表す値
     */
    const HANDVALUE_CHO = 1;

    /**
     * @var int パーを表す値
     */
    const HANDVALUE_PAA = 2;

    /**
     * @var array じゃんけんの手
     */
    const hand = [
        new Hand(self::HANDVALUE_GUU),
        new Hand(self::HANDVALUE_CHO),
        new Hand(self::HANDVALUE_PAA)
    ];

    private $name = ['グー', 'チョキ', 'パー'];

    private $handValue;


    public function __construct(int $handValue)
    {
        $this->handValue = $handValue;
    }

    public function getHand(int $handValue) : Hand
    {
        return $this->hand[$handValue];
    }

    public function isStrongerThan(Hand $hand) : bool
    {
        return $this->fight($hand) === 1;
    }

    public function isWeakerThan(Hand $hand) : bool
    {
        return $this->fight($hand) === -1;
    }

    public function toString() : string
    {
        return $this->name[$this->handValue];
    }

    private function fight(Hand $hand) : int
    {
        if ($this === $hand) {
            return 0;
        } elseif (($this->handValue + 1) % 3 === $hand->handValue) {
            return 1;
        } else {
            return -1;
        }
    }
}
