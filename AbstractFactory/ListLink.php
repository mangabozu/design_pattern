<?php

/**
 * 具体的な部品：HTMLのリンクを表すクラス
 */
class ListLink extends Link
{
    /**
     * コンストラクタ
     *
     * @param string $caption
     * @param string $url
     */
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    /**
     * HTMLでリンクを生成
     *
     * @return string
     */
    public function makeHTML() : string
    {
        return " <li><a href=\"" . $this->url . "\">" . $this->caption . "</a></li>\n";
    }
}
