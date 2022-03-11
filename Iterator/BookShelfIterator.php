<?php

/**
 * 本棚に置いてある本の数え上げを行うクラス
 */
class BookShelfIterator implements IteratorInterface
{
    /**
     * 本棚クラス
     *
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * インデックス
     *
     * @var int
     */
    private $index;

    /**
     * コンストラクタ
     *
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        // 初期値セット
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * 次の本が存在するかチェック
     *
     * @return bool
     */
    public function hasNext() : bool
    {
        // 現在の本以降に本が本棚に存在するかチェック
        return ($this->index < $this->bookShelf->getLength()) ? true : false;
    }

    /**
     * 次の本を取得する
     *
     * @return Book
     */
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
