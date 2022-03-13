<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Banner.php';
require_once dirname(__FILE__) . '\PrintInterface.php';
require_once dirname(__FILE__) . '\PrintAbstract.php';
require_once dirname(__FILE__) . '\PrintBannerDelegation.php';
require_once dirname(__FILE__) . '\PrintBannerInheritance.php';

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
     * 文字列
     *
     * @var string
     */
    private $string; 

    /**
     * コンストラクタ
     *
     * @param String $string
     * @return void
     */
    public function __construct(String $string)
    {
        $this->string = $string;
    }

    /**
     * アダプター継承パターン実行
     *
     * @return void
     */
    public function inheritance() : void
    {
        // アダプタークラスインスタンス生成 ※継承パターン
        $printBannerInheritance = new PrintBannerInheritance($this->string);
        // 文字列を弱く表示する
        $printBannerInheritance->printWeak();
        // 文字列を強く表示する
        $printBannerInheritance->printStrong();
    }

    /**
     * アダプター委譲パターン実行
     *
     * @return void
     */
    public function delegation() : void
    {
        // アダプタークラスインスタンス生成 ※委譲パターン
        $printBannerDelegation = new PrintBannerDelegation($this->string);
        // 文字列を弱く表示する
        $printBannerDelegation->printWeak();
        // 文字列を強く表示する
        $printBannerDelegation->printStrong();
    }
}

// アダプター継承パターン実行
$mainInheritance = new Main('Hello');
$mainInheritance->inheritance();

// アダプター委譲パターン実行
$mainDelegation = new Main('World');
$mainDelegation->delegation();
