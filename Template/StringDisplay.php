<?php

/**
 * 文字表示クラス
 */
class StringDisplay extends AbstractDisplay
{
    /**
     * 文字列
     *
     * @var string
     */
    private $string;

    /**
     * 文字バイト数
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
        // UTF-8はバイト数が３なのでSJISに変換してバイト数をカウントする
        $this->width = strlen(mb_convert_encoding($string, 'SJIS', 'UTF-8'));

    }

    /**
     * 表示開始
     *
     * @return void
     */
    public function open() : void
    {
        $this->printLine();
    }

    /**
     * 出力
     *
     * @return void
     */
    public function print() : void
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    /**
     * 表示終了
     *
     * @return void
     */
    public function close() : void
    {
        $this->printLine();
    }

    /**
     * 文字幅に合わせたラインを出力
     *
     * @return void
     */
    private function printLine() : void
    {
        $line = '';

        // 文字幅の分だけ「-」を連結する
        for ($i = 0; $i < $this->width; $i++) {
            $line .= '-';
        }
        //ラインを出力
        echo '+' . $line . '+' . PHP_EOL;
    }
}
