<?php

/**
 * 抽象的な部分：HTMLのページを表すクラス
 */
abstract class Page
{
    /**
     * タイトル
     *
     * @var string
     */
    protected $title;

    /**
     * タイトル
     *
     * @var string
     */
    protected $author;

    /**
     * タイトル
     *
     * @var array
     */
    protected $content = [];

    /**
     * コンストラクタ
     *
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item) : void
    {
        $this->content[] = $item;
    }

    /**
     * アウトプット
     *
     * @return void
     */
    public function output() : void
    {
        try {
            $fileName = $this->title . '.html';
            echo $this->makeHTML();
            echo $fileName . 'を作成しました。';
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    /**
     * HTMLを生成する
     *
     * @return string
     */
    abstract public function makeHTML() : string;
}
