<?php

/**
 * 「表示する」クラス
 * 実装クラス階層：最上位
 */
abstract class DisplayImpl
{
    /**
     * 表示の前処理
     *
     * @return void
     */
    abstract public function rawOpen() : void;

    /**
     * 表示処理
     *
     * @return void
     */
    abstract public function rawPrint() : void;

    /**
     * 表示の後処理
     *
     * @return void
     */
    abstract public function rawClose() : void;
}
