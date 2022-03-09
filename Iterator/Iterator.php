<?php

namespace Iterator;

/**
 * 要素の数え上げや、ループ変数の役割を果たす
 */
interface Iterator
{
    /**
     * 次の要素が存在するかチェック
     *
     * @return bool
     */
    public function hasNext() : bool;

    /**
     * 次の要素を取得する
     *
     * @return object
     */
    public function next();
}
