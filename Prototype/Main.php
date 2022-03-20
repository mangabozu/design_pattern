<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Product.php';
require_once dirname(__FILE__) . '\Manager.php';
require_once dirname(__FILE__) . '\UnderlinePen.php';
require_once dirname(__FILE__) . '\MessageBox.php';

/**
 * Prototype実行クラス
 *
 * 下記の場合に使用するデザインパターン
 * ・種類が多すぎてクラスにまとめられない場合
 * ・クラスからのインスタンス生成が難しい場合
 * ・フレームワークと生成するインスタンスを分けたい場合
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
        $manager = new Manager;
        $upen = new UnderlinePen('~');
        $mbox = new MessageBox('*');
        $sbox = new MessageBox('/');
        $manager->register('strong message', $upen);
        $manager->register('warning box', $mbox);
        $manager->register('slash box', $sbox);

        // 生成
        $p1 = $manager->create('strong message');
        $p1->use('Hello world.');
        $p2 = $manager->create('warning box');
        $p2->use('Hello world.');
        $p3 = $manager->create('slash box');
        $p3->use('Hello world.');
    }
}

// 処理実行
new Main;
