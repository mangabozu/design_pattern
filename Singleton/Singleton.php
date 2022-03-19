<?php

/**
 * インスタンスを1度だけ生成するクラス
 */
class Singleton
{
    /**
     * シングルトン
     *
     * @var Singleton
     */
    private static $singleton;

    /**
     * コンストラクタ
     *
     * @return void
     */
    private function __construct()
    {
        echo 'インスタンスを生成しました。';
    }

    /**
     * インスタンスを取得
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        // インスタンスが生成されていない場合はインスタンスを生成する
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton;
        }
        return self::$singleton;
    }
}
