<?php

/**
 * 「指定回数だけ表示する」という機能を追加したクラス
 * 機能のクラス階層
 */
class CountDisplay extends Display
{
    /**
     * コンストラクタ
     *
     * @param DisplayImpl $impl
     */
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    /**
     * 指定回数表示
     *
     * @param int $times
     * @return void
     */
    public function multiDisplay(int $times) : void
    {
        // 表示開始
        $this->open();
        // 回数分表示
        for ($i = 0; $i < $times; $i++) {
            $this->print();
        }
        // 表示終了
        $this->close();
    }
}
