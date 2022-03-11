<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Aggregate.php';
require_once dirname(__FILE__) . '\IteratorInterface.php';
require_once dirname(__FILE__) . '\BookShelfIterator.php';
require_once dirname(__FILE__) . '\Book.php';
require_once dirname(__FILE__) . '\BookShelf.php';

/**
 * Iterator実行クラス
 */
class Main
{
    // コンストラクタ
    public function __construct()
    {
        // 本棚に置く本の数をセット
        $bookShelf = new BookShelf(4);

        // 本棚に置く本をセット
        $bookShelf->appendBook(new Book('ドラゴンボール'));
        $bookShelf->appendBook(new Book('スラムダンク'));
        $bookShelf->appendBook(new Book('ONEPIECE'));
        $bookShelf->appendBook(new Book('NARUTO'));
        
        // 本棚にある本の数え上げを行う
        $iterator = $bookShelf->iterator();

        // $bookShelf->appendBook(new Book('幽遊白書'));

        // 次の本が存在するかチェック
        while ($iterator->hasNext())
        {
            // 次の本を取得し、名前を表示
            echo $iterator->next()->getName() . PHP_EOL;
        }
    }
}

// 処理実行
new Main;
