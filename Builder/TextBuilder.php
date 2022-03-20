<?php

/**
 * プレーンテキスト（普通の文字列）を使って文書を作るクラス
 */
class TextBuilder extends Builder
{
    /**
     * 文書を組み立てる
     *
     * @var array
     */
    private $Build = [];

    /**
     * タイトルを生成
     *
     * @param string $title
     * @return void
     */
    public function makeTitle(string $title) : void
    {
        $this->Build[] = '==============================' . PHP_EOL;
        $this->Build[] = '『' . $title . '』' . PHP_EOL . PHP_EOL;
    }

    /**
     * 文字列を生成
     *
     * @param string $str
     * @return void
     */
    public function makeString(string $str) : void
    {
        $this->Build[] = '■' . $str . PHP_EOL . PHP_EOL;
    }

    /**
     * 箇条書きを生成
     *
     * @param array $items
     * @return void
     */
    public function makeItems(array $items) : void
    {
        foreach ($items as $item) {
            $this->Build[] = ' ・' . $item . PHP_EOL;
        }
        $this->Build[] = PHP_EOL;
    }

    /**
     * 文書を完成させる
     *
     * @return void
     */
    public function close() : void
    {
        $this->Build[] = '==============================' . PHP_EOL;
    }

    /**
     * 文書を組み立てた結果を返す
     *
     * @return string
     */
    public function getResult() : string
    {
        return implode('', $this->Build);
    }
}
