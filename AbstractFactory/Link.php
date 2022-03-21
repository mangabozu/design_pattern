<?php

/**
 * 抽象的な部分：HTMLのリンクを表すクラス
 */
abstract class Link extends Item
{
    /**
     * UURL
     *
     * @var string
     */
    protected $url;

    /**
     * コンストラクタ
     *
     * @param string $caption
     * @param string $url
     * @return void
     */
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}
