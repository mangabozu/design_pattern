<?php

/**
 * 1つの文書を作るクラス
 */
class Director
{
    /**
     * Builderインスタンス
     *
     * @var Builder
     */
    private $builder;

    /**
     * コンストラクタ
     *
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * 文書の組み立て実行
     *
     * @return void
     */
    public function exce() : void
    {
        // 文書を組み立てる
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems(['おはようございます。', 'こんにちは。']);
        $this->builder->makeString('夜に');
        $this->builder->makeItems(['こんばんは。', 'おやすみなさい。', 'さようなら。']);

        // 文書を完成させる
        $this->builder->close();
    }
}
