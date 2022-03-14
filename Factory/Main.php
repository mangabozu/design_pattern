<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Product.php';
require_once dirname(__FILE__) . '\Factory.php';
require_once dirname(__FILE__) . '\IDCard.php';
require_once dirname(__FILE__) . '\IDCardFactory.php';

/**
 * Factory実行クラス
 * 
 * インスタンスを生成する工場をTemplateパターンで構成するデザインパターン
 */
class Main
{
    /**
     * カードを作成、使用する
     */
    public function __construct()
    {
        $factory = new IDCardFactory;

        $card1 = $factory->create('田中太郎');
        $card1->use();

        $card2 = $factory->create('山田花子');
        $card2->use();

        $card3 = $factory->create('高橋和也');
        $card3->use();
    }
}

// 処理実行
new Main;
