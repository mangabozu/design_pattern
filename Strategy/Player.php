<?php

/**
 * じゃんけんを行うプレイヤーを表すクラス
 */
class Player
{
    /**
     * @var string プレーヤー名
     */
    private $name;

    /**
     * @var Strategy じゃんけんの戦略
     */
    private $strategy;

    /**
     * @var int 勝利回数
     */
    private $winCount;

    /**
     * @var int 敗北回数
     */
    private $loseCount;

    /**
     * @var int ゲーム回数
     */
    private $gameCount;

    /**
     * コンストラクタ
     *
     * @param string $name
     * @param Strategy $strategy
     */
    public function __construct(string $name, Strategy $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    /**
     * 次の手を取得
     *
     * @return Hand
     */
    public function nextHand() : Hand
    {
        return $this->strategy->nextHand();
    }

    /**
     * 勝利判定
     *
     * @return void
     */
    public function win() : void
    {
        $this->strategy->study(true);
        $this->winCount++;
        $this->gameCount++;
    }

    /**
     * 敗北判定
     *
     * @return void
     */
    public function lose() : void
    {
        $this->strategy->study(false);
        $this->loseCount++;
        $this->gameCount++;
    }

    /**
     * 引き分け判定
     *
     * @return void
     */
    public function even() : void
    {
        $this->gameCount++;
    }

    /**
     * 勝敗メッセージを表示
     *
     * @return string
     */
    public function toString() : string
    {
        return '[' . $this->name . '：' . $this->gameCount . ' games, ' . $this->winCount . ' win, ' . $this->loseCount . ' lose' . ']';
    }
}
