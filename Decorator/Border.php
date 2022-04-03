<?php

/**
 * 「飾り枠」を表す抽象クラス
 */
abstract class Border extends Display
{
    protected $display;
    protected function __construct(Display $display)
    {
        $this->display = $display;
    }
}
