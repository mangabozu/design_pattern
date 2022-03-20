<?php

/**
 * 抽象メソッドuseとcreateCloneが宣言されているインターフェイス
 */
interface Product
{
    /**
     * 対処文字を加工
     *
     * @param string $str
     * @return void
     */
    public function use(string $str);

    /**
     * Productをクローン
     *
     * @return Product
     */
    public function createClone() : Product;
}
