<?php

/**
 * あらかじめ提供されているバナークラス
 */
class Banner
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
     * @param string $string
     * @return void
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * カッコで囲って文字列を表示
     *
     * @return void
     */
    public function showWithParen() : void
    {
        echo '(' . $this->string . ')' . PHP_EOL;
    }

    /**
     * アスタリスクで囲って文字列を表示
     *
     * @return void
     */
    public function showWithAster() : void
    {
        echo '*' . $this->string . '*' . PHP_EOL;
    }
}
