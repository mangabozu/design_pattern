<?php

/**
 * 表示の抽象クラス
 */
abstract class AbstractDisplay
{
    /**
     * @var int 出力回数
     */
    const OUTPUT_TIMES = 5;
    /**
     * 表示開始
     *
     * @return void
     */
    abstract public function open() : void;

    /**
     * 出力
     *
     * @return void
     */
    abstract public function print() : void;

    /**
     * 表示終了
     *
     * @return void
     */
    abstract public function close() : void;

    /**
     * 画面表示処理
     *
     * @return void
     */
    public function display() : void
    {
        // 画面表示開始
        $this->open();

        // 回数分出力を行う
        for ($i = 1; $i <= self::OUTPUT_TIMES; $i++) {
            $this->print();
        }
        // 画面表示終了
        $this->close();
    }
}
