<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\AbstractDisplay.php';
require_once dirname(__FILE__) . '\StringDisplay.php';
require_once dirname(__FILE__) . '\CharDisplay.php';

/**
 * Template実行クラス
 * 
 * テンプレート機能を持つデザインパターン
 * 親クラスで処理の枠組みを定め、サブクラスでその具体的内容を定める
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
        // 文字表示
        $d1 = new CharDisplay('I');
        $d1->display();

        // 文字列表示（アルファベット）
        $d2 = new StringDisplay('Hello World!');
        $d2->display();

        // 文字列表示（日本語）
        $d3 = new StringDisplay('こんにちは！');
        $d3->display();
    }
}

// 処理実行
new Main;
