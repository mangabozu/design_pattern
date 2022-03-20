<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Builder.php';
require_once dirname(__FILE__) . '\Director.php';
require_once dirname(__FILE__) . '\TextBuilder.php';
require_once dirname(__FILE__) . '\HTMLBuilder.php';

/**
 * Builder実行クラス
 *
 * 複雑なインスタンスを組み立てるデザインパターン
 */
class Main
{
    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct(string $type)
    {
        // プレーンテキスト
        if ($type === 'text') {
            $textBuilder = new TextBuilder;
            $director = new Director($textBuilder);
            $director->exce();
            $result = $textBuilder->getResult();
            echo $result;

        // HTML
        } elseif ($type === 'html') {
            $htmlBuilder = new HTMLBuilder;
            $director = new Director($htmlBuilder);
            $director->exce();
            $result = $htmlBuilder->getResult();
            echo $result;

        // その他
        } else {
            echo '該当タイプが存在しません。';
        }
    }
}

// 処理実行
// new Main('text');
new Main('html');
// new Main('hoge');
