<?php

/**
 * じゃんけんの「戦略」を表すインターフェイス
 */
interface Strategy
{
    public function nextHand() : Hand;
    public function study(bool $win) : void;
}
