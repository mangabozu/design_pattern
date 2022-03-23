<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Display.php';
require_once dirname(__FILE__) . '\CountDisplay.php';
require_once dirname(__FILE__) . '\DisplayImpl.php';
require_once dirname(__FILE__) . '\StringDisplayImpl.php';

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
        // 準備
        $d1 = new Display(new StringDisplayImpl('Hello, Japan.'));
        $d2 = new CountDisplay(new StringDisplayImpl('Hello, World.'));
        $d3 = new CountDisplay(new StringDisplayImpl('Hello, Universe.'));
        // 実行
        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(5);
    }
}

// 処理実行
new Main();
