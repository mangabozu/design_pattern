<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Hand.php';
require_once dirname(__FILE__) . '\Strategy.php';
require_once dirname(__FILE__) . '\WinningStrategy.php';
require_once dirname(__FILE__) . '\ProbStrategy.php';
require_once dirname(__FILE__) . '\Player.php';

/**
 * Bridge実行クラス
 *
 * 親クラスは抽象メソッドによってインターフェイスを規定している
 * サブクラスは具象メソッドによってそのインターフェイスを実装する
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

    }
}

// 処理実行
new Main();
