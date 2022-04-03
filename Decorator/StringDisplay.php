<?php

/**
 * 1行だけからなる文字列表示用のクラス
 */
class StringDisplay extends Display
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getColumns() : int
    {
        return strlen(mb_convert_encoding($this->string, 'SJIS', 'UTF-8'));
    }

    public function getRows() : int
    {
        return 1;
    }

    public function getRowText(int $row) : string
    {
        if ($row === 0) {
            return $this->string;
        } else {
            return null;
        }
    }
}
