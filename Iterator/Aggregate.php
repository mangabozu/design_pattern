<?php

namespace Iterator;

/**
 * 集合体を表すインターフェイス
 */
interface Aggregate
{
    /**
     * 集合体に対応するIteratorを1個作成する
     */
    public function iterator() : object;
}
