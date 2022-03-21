<?php

/**
 * 具体的な部品：HTMLのリンクを表すクラス
 */
class ListLink extends Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML() : string
    {
        return " <li><a href=\"" . $this->url . "\">" . $this->caption . "</a></li>\n";
    }
}
