<?php

/**
 * 工場を表したクラス
 */
abstract class Factory
{
    /**
     * Productインスタンスを生成する
     *
     * @param string $owner
     * @return Product
     */
    final public function create(string $owner) : Product
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    /**
     * インスタンス生成
     *
     * @param string $owner
     * @return Product
     */
    abstract protected function createProduct(string $owner) : Product;

    /**
     * 生成したインスタンスを登録
     *
     * @param Product $product
     * @return void
     */
    abstract protected function registerProduct(Product $product) : void;
}
