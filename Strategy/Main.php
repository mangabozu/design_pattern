<?php

// 必要ファイル読み込み
require_once dirname(__FILE__) . '\Hand.php';
require_once dirname(__FILE__) . '\Strategy.php';
require_once dirname(__FILE__) . '\WinningStrategy.php';
require_once dirname(__FILE__) . '\ProbStrategy.php';
require_once dirname(__FILE__) . '\Player.php';

/**
 * Bridge実行クラス
 *
 * 親クラスは抽象メソッドによってインターフェイスを規定している
 * サブクラスは具象メソッドによってそのインターフェイスを実装する
 */
class Main
{
    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct($seed1, $seed2)
    {
        // プレイヤーを設定
        $player1 = new Player('Taro', new WinningStrategy($seed1));
        $player2 = new Player('Hana', new ProbStrategy($seed2));

        // 100回じゃんけんを行う
        for ($i = 0; $i < 100; $i++) {
            // 各プレーヤーの次の手を取得
            $nextHand1 = $player1->nextHand();
            $nextHand2 = $player2->nextHand();

            if ($nextHand1->isStrongerThan($nextHand2)) {
                echo 'Winner:' . $player1->name . PHP_EOL;
                $player1->win();
                $player2->lose();
            } elseif ($nextHand2->isStrongerThan($nextHand1)) {
                echo 'Winner:' . $player2->name . PHP_EOL;
                $player1->lose();
                $player2->win();
            } else {
                echo 'Even...' . PHP_EOL;
                $player1->even();
                $player2->even();
            }
            echo 'Total result' . PHP_EOL;
            echo $player1->toString() . PHP_EOL;
            echo $player2->toString() . PHP_EOL;
        }
    }
}

// 処理実行
new Main(1,2);
