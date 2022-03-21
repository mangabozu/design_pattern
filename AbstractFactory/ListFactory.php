<?php

/**
 * 具体的な工場を表すクラス（ListLink、ListTray、ListPageを作る）
 */
class ListFactory extends AbstractFactory
{
    /**
     * リンクを生成
     *
     * @param string $caption
     * @param string $url
     * @return Link
     */
    public function createLink(string $caption, string $url) : Link
    {
        return new ListLink($caption, $url);
    }

    /**
     * リンクを生成
     *
     * @param string $caption
     * @return Tray
     */
    public function createTray(string $caption) : Tray
    {
        return new ListTray($caption);
    }

    /**
     * リンクを生成
     *
     * @param string $title
     * @param string $author
     * @return Page
     */
    public function createPage(string $title, string $author) : Page
    {
        return new ListPage($title, $author);
    }
}
