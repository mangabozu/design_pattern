<?php

/**
 * 「文字列を使って表示する」クラス
 */
class StringDisplayImpl extends DisplayImpl
{
    /**
     * 文字列
     *
     * @var string
     */
    private $string;

    /**
     * 文字数
     *
     * @var int
     */
    private $width;

    /**
     * コンストラクタ
     *
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = strlen(mb_convert_encoding($string, 'SJIS', 'UTF-8'));
    }
    /**
     * 表示の前処理
     *
     * @return void
     */
    public function rawOpen() : void
    {
        $this->printLine();
    }

    /**
     * 表示処理
     *
     * @return void
     */
    public function rawPrint() : void
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    /**
     * 表示の後処理
     *
     * @return void
     */
    public function rawClose() : void
    {
        $this->printLine();
    }

    /**
     * ラインを表示
     *
     * @return void
     */
    private function printLine() : void
    {
        echo '+';
        // 文字幅に合わせてループ
        for ($i = 0; $i < $this->width; $i++) {
            echo '-';
        }
        echo '+' . PHP_EOL;
    }
}
