<?php

/**
 * 文字列表示に必要なインターフェイスを定義
 */
interface PrintInterface
{
    /**
     * 文字列を弱く表示する
     *
     * @return void
     */
    public function printWeak() : void;

    /**
     * 文字列を強く表示する
     *
     * @return void
     */
    public function printStrong() : void;
}
