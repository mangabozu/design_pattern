<?php

/**
 * 具体的な部品：HTMLのページを表すクラス
 */
class ListPage extends Page
{
    /**
     * コンストラクタ
     *
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    /**
     * HTMLでページを生成
     *
     * @return string
     */
    public function makeHTML() : string
    {
        $buffer = [];

        $buffer[] = '<html><head><title>' . $this->title . '</title></head>' . PHP_EOL;
        $buffer[] = '<body>' . PHP_EOL;
        $buffer[] = '<h1>' . $this->title . '</h1>' . PHP_EOL;
        $buffer[] = '<ul>' . PHP_EOL;

        foreach ($this->content AS $item) {
            $buffer[] = $item->makeHTML();
        }
        
        $buffer[] = '</ul>' . PHP_EOL;
        $buffer[] = '<hr><address>' . $this->author . '</address>' . PHP_EOL;
        $buffer[] = '</body></html>' . PHP_EOL;
        return implode('', $buffer);
    }
}
