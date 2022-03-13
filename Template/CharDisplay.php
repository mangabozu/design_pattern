<?php

/**
 * 文字表示クラス
 */
class CharDisplay extends AbstractDisplay
{
    /**
     * 文字
     *
     * @var string
     */
    private $char;

    /**
     * コンストラクタ
     *
     * @param string $char
     */
    public function __construct(string $char)
    {
        $this->char = $char;
    }

    /**
     * 表示開始
     *
     * @return void
     */
    public function open() : void
    {
        echo '<<';
    }

    /**
     * 出力
     *
     * @return void
     */
    public function print() : void
    {
        echo $this->char;
    }

    /**
     * 表示終了
     *
     * @return void
     */
    public function close() : void
    {
        echo '>>' . PHP_EOL;
    }
}
