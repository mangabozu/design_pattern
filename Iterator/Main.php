<?php

namespace Iterator;

use Iterator\BookShelf;
use Iterator\Book;

class Main
{
    public function __construct()
    {
        $bookShelf = new BookShelf(4);
        $bookShelf->appendBook(new Book('ドラゴンボール'));
        $bookShelf->appendBook(new Book('スラムダンク'));
        $bookShelf->appendBook(new Book('ONE PIECE'));
        $bookShelf->appendBook(new Book('NARUTO'));
        $iterator = $bookShelf->iterator();

        while ($iterator->hasNext())
        {
            $book = $iterator->next();
            echo $book->getName();
        }
    }
}

// 処理実行
new Main;
