<?php

/**
 * アダプタークラス ※継承パターン
 */
class PrintBannerInheritance extends Banner implements PrintInterface
{
    /**
     * コンストラクタ
     *
     * @param string $string
     * @return void
     */
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    /**
     * 文字列を弱く表示する
     *
     * @return void
     */
    public function printWeak() : void
    {
        // カッコで囲って文字列を表示
        $this->showWithParen();
    }

    /**
     * 文字列を強く表示する
     *
     * @return void
     */
    public function printStrong() : void
    {
        // アスタリスクで囲って文字列を表示
        $this->showWithAster();
    }
}
