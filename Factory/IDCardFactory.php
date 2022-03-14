<?php

/**
 * IDCardのインスタンスを生成することで「製品を作る」ことを表現している
 */
class IDCardFactory extends Factory
{
    /**
     * 所有者
     *
     * @var array
     */
    private $owners = [];

    /**
     * インスタンス生成
     *
     * @param string $owner
     * @return Product
     */
    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    /**
     * 生成したインスタンスを登録
     *
     * @param IDCard|Product $product
     * @return void
     */
    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }

    /**
     * 所有者を返す
     *
     * @return array
     */
    public function getOwner()
    {
        return $this->owners;
    }
}
