<?php

 /**
  * ネームスペースを使ったオートローダークラス
  */
final class Autoloader
{
    /**
     * ルートパス
     *
     * @var string|null
     */
    private $rootPath = null;

    /**
     * construct
     *
     * @param string $rootPath
     * @return void
     */
    public function __construct(string $rootPath)
    {
        $this->root = $rootPath;
    }

    /**
     * 対象クラスをロード
     *
     * @return void
     */
    public function load() : void
    {
        // 未定義のクラスをコールした場合はクラスの読み込みを行う
        spl_autoload_register([$this, 'read']);
    }

    /**
     * クラス読み込み
     *
     * @param string $class
     * @return void
     */
    private function read(string $class) : void
    {
        // 対象クラスのPHPファイルを設定
        $file = $this->rootPath . $class . '.php';

        // ファイルが存在している場合は読み込みを行う
        if (is_readable($file)) {
            require_once $file;
            return;
        }
    }
}
