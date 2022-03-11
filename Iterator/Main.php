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
    /**
     * コンストラクタ
     *
     * @param int $maxBooks
     * @param array $books
     * @return void
     */
    public function __construct(int $maxBooks, array $books = [])
    {
        // 本棚に置く本の数をセット
        $bookShelf = new BookShelf($maxBooks);

        // 本棚に置く本をセット
        foreach ($books as $book) {
            $bookShelf->appendBook(new Book($book));
        }
        // 本棚にある本の数え上げを行う
        $iterator = $bookShelf->iterator();

        // 次の本が存在するかチェック
        while ($iterator->hasNext()) {
            // 次の本を取得し、名前を表示
            echo $iterator->next()->getName() . PHP_EOL;
        }
    }
}

// 処理実行
new Main(4, ['ドラゴンボール', 'スラムダンク', 'ONEPIECE', 'NARUTO', '幽遊白書']);
