<?php

/**
 * 抽象的な工場を表すクラス（Link,Tray,Pageを作る）
 */
abstract class AbstractFactory
{
    /**
     * リンクを作成
     *
     * @param string $caption
     * @param string $url
     * @return Link
     */
    abstract public function createLink(string $caption, string $url) : Link;

    /**
     * リストを生成
     *
     * @param string $caption
     * @return Tray
     */
    abstract public function createTray(string $caption) : Tray;

    /**
     * ページを生成
     *
     * @param string $title
     * @param string $author
     * @return Page
     */
    abstract public function createPage(string $title, string $author) : Page;

    /**
     * 引数で渡されたクラスのインスタンスを生成
     *
     * @param string $className
     * @return Factory
     */
    public static function getFactory(string $className) : Factory
    {
        $factory = null;

        try {
            $factory = new $className;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $factory;
    }
}
