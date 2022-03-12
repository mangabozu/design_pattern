<?php

/**
 * 文字列表示に必要な抽象クラスを定義
 */
abstract class PrintAbstract
{
    /**
     * 文字列を弱く表示する
     *
     * @return void
     */
    abstract public function printWeak() : void;

    /**
     * 文字列を強く表示する
     *
     * @return void
     */
    abstract public function printStrong() : void;
}
