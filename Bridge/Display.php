<?php

/**
 * 「表示する」クラス
 * 機能のクラス階層：最上位
 */
class Display
{
    /**
     * 「表示する」クラス
     *
     * @var DisplayImpl
     */
    private $impl;

    /**
     * コンストラクタ
     *
     * @param DisplayImpl $impl
     */
    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    /**
     * 表示の前処理
     *
     * @return void
     */
    public function open() : void
    {
        $this->impl->rawOpen();
    }

    /**
     * 表示処理
     *
     * @return void
     */
    public function print() : void
    {
        $this->impl->rawPrint();
    }

    /**
     * 表示の後処理
     *
     * @return void
     */
    public function close() : void
    {
        $this->impl->rawClose();
    }

    /**
     * インターフェイスｈ￥「表示する」を実現
     *
     * @return void
     */
    final public function display() : void
    {
        $this->open();
        $this->print();
        $this->close();
    }
}
