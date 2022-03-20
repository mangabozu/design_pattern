<?php

/**
 * 文字列を枠線で囲って表示するクラス
 * useとcreateCloneを実装している
 */
class MessageBox implements Product
{
    /**
     * デコレーション文字
     *
     * @var string
     */
    private $decochar;

    /**
     * 囲い文字をセット
     *
     * @param string $decochar
     */
    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    /**
     * 対象文字を囲い文字で囲う
     *
     * @param string $str
     * @return void
     */
    public function use(string $str) : void
    {
        // 対象の文字数をセット
        $length = strlen(mb_convert_encoding($str, 'SJIS', 'UTF-8'));

        // 対象の文字を囲い文字で囲う
        $this->getDecochar($str, $length);
        echo $this->decochar . ' ' . $str . ' ' . $this->decochar . PHP_EOL;
        $this->getDecochar($str, $length);
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

    /**
     * 囲い文字の上下をセット
     *
     * @param string $str
     * @param int $length
     * @return void
     */
    public function getDecochar(string $str, int $length) : void
    {
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;
    }
}
