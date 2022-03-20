<?php

/**
 * 文書を構成するためのメソッドを定めた抽象クラス
 */
abstract class Builder
{
    /**
     * タイトルを生成
     *
     * @param string $title
     * @return void
     */
    abstract public function makeTitle(string $title) : void;

    /**
     * 文字列を生成
     *
     * @param string $str
     * @return void
     */
    abstract public function makeString(string $str) : void;

    /**
     * 箇条書きを生成
     *
     * @param array $items
     * @return void
     */
    abstract public function makeItems(array $items) : void;

    /**
     * 文書を完成させる
     *
     * @return void
     */
    abstract public function close() : void;
}
