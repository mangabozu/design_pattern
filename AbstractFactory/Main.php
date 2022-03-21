<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Item.php';
require_once dirname(__FILE__) . '\AbstractFactory.php';
require_once dirname(__FILE__) . '\Link.php';
require_once dirname(__FILE__) . '\Page.php';
require_once dirname(__FILE__) . '\Tray.php';
require_once dirname(__FILE__) . '\ListFactory.php';
require_once dirname(__FILE__) . '\ListLink.php';
require_once dirname(__FILE__) . '\ListTray.php';
require_once dirname(__FILE__) . '\ListPage.php';

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
     * @param string $className
     * @return void
     */
    public function __construct(string $className)
    {
        $factory = new $className;

        $asahi = $factory->createLink('朝日新聞', 'http://www.asahi.com/');
        $yomiuri = $factory->createLink('読売新聞', 'http://www.yomiuri.com/');
        $usYahoo = $factory->createLink('Yahoo!', 'http://www.yahoo.com/');
        $jaYahoo = $factory->createLink('Yahoo!Japan', 'http://www.yahoo.co.jp/');
        $excite = $factory->createLink('Excite', 'http://www.excite.com/');
        $google = $factory->createLink('Google', 'http://www.google.com/');

        $trayNews = $factory->createTray('新聞');
        $trayNews->add($asahi);
        $trayNews->add($yomiuri);

        $trayYahoo = $factory->createTray('Yahoo!');
        $trayYahoo->add($usYahoo);
        $trayYahoo->add($jaYahoo);

        $traySearch = $factory->createTray('サーチエンジン');
        $traySearch->add($trayYahoo);
        $traySearch->add($excite);
        $traySearch->add($google);

        $page = $factory->createPage('LinkPage', '結城 浩');
        $page->add($trayNews);
        $page->add($traySearch);

        $page->output();

    }
}

// 処理実行
new Main('ListFactory');
