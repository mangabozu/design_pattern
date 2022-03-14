<?php

/**
 * 製品を表現したクラス
 */
abstract class Product
{
    /**
     * 対象の認識番号カードを使用
     *
     * @return void
     */
    abstract public function use() : void;
}
