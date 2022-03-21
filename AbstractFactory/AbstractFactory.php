<?php

/**
 * 抽象的な工場を表すクラス（Link,Tray,Pageを作る）
 */
abstract class AbstractFactory
{
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

    abstract public function createLink(string $caption, string $url) : Link;
    abstract public function createTray(string $caption) : Tray;
    abstract public function createPage(string $title, string $author) : Page;
}
