<?php

/**
 * 文字列を下線を引いて表示するクラス
 * useとcreateCloneを実装している
 */
class UnderlinePen implements Product
{
    /**
     * デコレーション文字
     *
     * @var string
     */
    private $ulchar;

    /**
     * コンストラクタ
     *
     * @param string $ulchar
     */
    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    /**
     * 文字列を下線を引く
     *
     * @param string $str
     * @return void
     */
    public function use(string $str) : void
    {
        // 対象の文字数をセット
        $length = strlen(mb_convert_encoding($str, 'SJIS', 'UTF-8'));

        // 文字数に合わせて下線を引く
        echo "\"" . $str . "\"" .  PHP_EOL . ' ';
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }
        echo PHP_EOL;
    }

    /**
     * Productをクローン
     *
     * @return Product
     */
    public function createClone() : Product
    {
        $product = null;

        try {
            $product = clone $this;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $product;
    }
}
