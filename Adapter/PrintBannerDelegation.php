<?php

/**
 * アダプタークラス ※委譲パターン
 */
class PrintBannerDelegation extends PrintAbstract
{
    /**
     * Bannerインスタンス
     *
     * @var Banner
     */
    private $banner;

    /**
     * コンストラクタ
     *
     * @param string $string
     * @return void
     */
    public function __construct(string $string)
    {
        $this->banner = new Banner($string);
    }

    /**
     * 文字列を弱く表示する
     *
     * @return void
     */
    public function printWeak() : void
    {
        // カッコで囲って文字列を表示
        $this->banner->showWithParen();
    }

    /**
     * 文字列を強く表示する
     *
     * @return void
     */
    public function printStrong() : void
    {
        // アスタリスクで囲って文字列を表示
        $this->banner->showWithAster();
    }
}
