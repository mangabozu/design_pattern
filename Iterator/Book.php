<?php

/**
 * 本を表すクラス
 */
class Book
{
    /**
     * 本の名前
     *
     * @var string
     */
    private $name;

    /**
     * コンストラクタ
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 本の名前を取得
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}
