<?php

namespace Iterator;

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
     *
     *
     * @var int
     */
    private $last = 0;

    public function __construct(int $maxSize)
    {
        $this->books[] = new Book($maxSize);
    }

    /**
     * Undocumented function
     *
     * @param integer $index
     * @return Book
     */
    public function getBookAt(int $index) : Book
    {
        return $this->books[$index];
    }

    /**
     * Undocumented function
     *
     * @param Book $book
     * @return void
     */
    public function appendBook(Book $book) : void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * Undocumented function
     *
     * @return int
     */
    public function getLength() : int
    {
        return $this->last;
    }

    /**
     * 集合体に対応するIteratorを1個作成する
     *
     * @return BookShelfIterator
     */
    public function iterator() : BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}
