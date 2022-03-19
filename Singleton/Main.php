<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Singleton.php';

/**
 * Singleton実行クラス
 *
 * 下記の制約を設けたいときに使用するデザインパターン
 * ・指定したクラスのインスタンスが絶対に1個しか存在しないことを保証したい
 * ・インスタンスが1つしかないことを表現したい
 */
class Main
{
    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct()
    {
        echo 'start.';

        // インスタンス生成
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        // インスタンスの重複チェック
        if ($obj1 === $obj2) {
            echo 'obj1とobj2は同じインスタンスです。';
        } else {
            echo 'obj1とobj2は同じインスタンスではありません。';
        }

        echo 'end.';
    }
}

// 処理実行
new Main;
