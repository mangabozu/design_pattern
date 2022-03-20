<?php

/**
 * HTMLファイルを使って文書を作るクラス
 */
class HTMLBuilder extends Builder
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
        $this->Build[] = '<html><head><title>' . $title . '</title></head><body>';
        $this->Build[] = '<h1>' . $title . '</h1>';
    }

    /**
     * 文字列を生成
     *
     * @param string $str
     * @return void
     */
    public function makeString(string $str) : void
    {
        $this->Build[] = '<p>' . $str . '</p>';
    }

    /**
     * 箇条書きを生成
     *
     * @param array $items
     * @return void
     */
    public function makeItems(array $items) : void
    {
        $this->Build[] = '<ul>';
        foreach ($items as $item) {
            $this->Build[] = '<li>' . $item . '</li>';
        }
        $this->Build[] = '</ul>';
    }

    /**
     * 文書を完成させる
     *
     * @return void
     */
    public function close() : void
    {
        $this->Build[] = '</body></html>';
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
