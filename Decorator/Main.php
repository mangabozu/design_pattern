<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Display.php';
require_once dirname(__FILE__) . '\StringDisplay.php';
require_once dirname(__FILE__) . '\Border.php';
require_once dirname(__FILE__) . '\SideBorder.php';
require_once dirname(__FILE__) . '\FullBorder.php';

/**
 * Adapter実行クラス
 *
 * AdapterパターンはWrapper（ラッパー）を行うデザインパターン
 * ・クラスによるAdapterパターン（継承を使用したもの）
 * ・インスタンスによるAdapterパターン（委譲を使用したもの）
 * 上記２パターンが存在する
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
        $d1 = new StringDisplay('Hello World');
        $d2 = new SideBorder($d1, '#');
        $d3 = new FullBorder($d2);
        $d1->show();
        $d2->show();
        $d3->show();
        $d4 = new SideBorder(
            new FullBorder(
                new FullBorder(
                    new SideBorder(
                        new FullBorder(
                            new StringDisplay('こんにちは。')
                        ),
                        '*'
                    )
                )
            ),
            '/'
        );
        $d4->show();
    }
}

// 実行
new Main();
