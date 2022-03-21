<?php

/**
 * 抽象的な部分：LinkやTrayを集めたクラス
 */
abstract class Tray extends Item
{
    /**
     * 箇条書き
     *
     * @var array
     */
    protected $tray = [];

    /**
     * コンストラクタ
     *
     * @param string $caption
     */
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    /**
     *
     *
     * @param Item $item
     * @return void
     */
    public function add(Item $item) : void
    {
        $this->tray[] = $item;
    }
}
