<?php

/**
 * 本棚を表現しているクラス
 */
class BookShelf implements Aggregate
{
    /**
     * 本棚
     *
     * @var array
     */
    private $books = [];

    /**
     * 本の総数
     *
     * @var int
     */
    private $last = 0;

    /**
     * コンストラクタ
     *
     * @param int $maxSize
     */
    public function __construct(int $maxSize)
    {
        // 本棚に億本の総数をセット
        $this->books[] = new Book($maxSize);
    }

    /**
     * 指定されたインデックスの本を取得
     *
     * @param int $index
     * @return Book
     */
    public function getBookAt(int $index) : Book
    {
        return $this->books[$index];
    }

    /**
     * 本棚の後ろに本を置く
     *
     * @param Book $book
     * @return void
     */
    public function appendBook(Book $book) : void
    {
        // 本棚の最終に本を置く
        $this->books[$this->last] = $book;
        // 本の総数を加算
        $this->last++;
    }

    /**
     * 現在本棚に置いてある本の総数を返す
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->last;
    }

    /**
     * 本棚にある本の数え上げインスタンスを生成
     *
     * @return BookShelfIterator
     */
    public function iterator() : BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}
