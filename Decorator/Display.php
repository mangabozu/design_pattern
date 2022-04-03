<?php

/**
 * 文字列表示用の抽象クラス
 */
abstract class Display
{
    abstract public function getColumns() : int;
    abstract public function getRows() : int;
    abstract public function getRowText(int $row) : string;
    final public function show() : void
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i) . PHP_EOL;
        }
    }
}
