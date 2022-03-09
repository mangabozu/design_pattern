<?php

namespace rank2\design_pattern\Iterator;

class BookShelfIterator implements Iterator
{
    /**
     *
     *
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * Undocumented variable
     *
     * @var int
     */
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext() : bool
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
