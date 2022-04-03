<?php

/**
 * 上下左右に飾り枠を表す抽象クラス
 */
class FullBorder extends Border
{
    public function __construct(Display $display)
    {
        parent::__construct($display);
    }

    public function getColumns() : int
    {
        return 1 + $this->display->getColumns() + 1;
    }

    public function getRows() : int
    {
        return 1 + $this->display->getRows() + 1;
    }

    public function getRowText(int $row) : string
    {
        if ($row === 0) {
            return '+' . $this->makeLine('-', $this->display->getColumns()) . '+';
        } elseif ($row === $this->display->getRows() + 1) {
            return '+' . $this->makeLine('-', $this->display->getColumns()) . '+';
        } else {
            return '|' . $this->display->getRowText($row - 1) . '|';
        }
    }

    private function makeLine(string $ch, int $count) : string
    {
        $buf = [];

        for ($i = 0; $i < $count; $i++) {
            $buf[] = $ch;
        }
        return implode('', $buf);
    }
}
