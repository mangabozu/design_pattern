<?php

/**
 * LinkとTrayを統一的に扱うためのクラス
 */
abstract class Item
{
    /**
     * 見出し
     *
     * @var string
     */
    protected $caption;

    /**
     * コンストラクタ
     *
     * @param string $caption
     * @return void
     */
    public function __construct(string $caption)
    {
        $this->caption = $caption;
    }

    /**
     * HTMLを生成する
     *
     * @return string
     */
    abstract public function makeHTML() : string;
}
