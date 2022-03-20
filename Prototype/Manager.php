<?php

/**
 * createCloneを使ってインスタンスを複製するクラス
 */
class Manager
{
    /**
     * 表示パターン
     *
     * @var array
     */
    private $showcase = [];

    /**
     * 表示パターンを作成
     *
     * @param string $name
     * @param Product $photo
     * @return void
     */
    public function register(string $name, Product $photo) : void
    {
        $this->showcase[$name] = $photo;
    }

    /**
     * 表示パターンをクローン
     *
     * @param string $protoname
     * @return Product
     */
    public function create(string $protoname) : Product
    {
        $product = $this->showcase[$protoname];
        return $product->createClone();
    }
}
