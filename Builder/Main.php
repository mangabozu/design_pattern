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
        $builder = null;

        // プレーンテキスト
        if ($type === 'text') $builder = new TextBuilder;
        // HTML
        if ($type === 'html') $builder = new HTMLBuilder;

        // Builderインスタンスが存在する場合は処理を実行
        if (isset($builder)) {
            $director = new Director($builder);
            $director->exce();
            $result = $builder->getResult();
            echo $result;
        } else {
            echo '該当タイプが存在しません。';
        }
    }
}

// 処理実行
// new Main('text');
new Main('html');
// new Main('hoge');
