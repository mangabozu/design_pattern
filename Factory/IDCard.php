<?php

/**
 * 認識番号カードを表現したクラス
 */
class IDCard extends Product
{
    /**
     * 所有者
     *
     * @var string
     */
    private $owner;

    /**
     * コンストラクタ
     * 指定された所有者の認識番号カードを作成
     *
     * @param string $owner
     */
    public function __construct(string $owner)
    {
        $this->owner = $owner;
        echo ($this->owner . 'のカードを作ります。') . PHP_EOL;
    }

    /**
     * 対象の認識番号カードを使用
     *
     * @return void
     */
    public function use() : void
    {
        echo ($this->owner . 'のカードを使います。') . PHP_EOL;
    }

    /**
     * 所有者を取得
     *
     * @return string
     */
    public function getOwner() : string
    {
        return $this->owner;
    }
}
