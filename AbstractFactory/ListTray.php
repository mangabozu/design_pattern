<?php

/**
 * 具体的な部品：LinkやTrayを集めたクラス
 */
class ListTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML() : string
    {
        $buffer = [];

        $buffer[] = '<li>' . PHP_EOL;
        $buffer[] = $this->caption . PHP_EOL;
        $buffer[] = '<ul>' . PHP_EOL;

        $buffer[] = '</ul>' . PHP_EOL;
        $buffer[] = '</li>' . PHP_EOL;
        $buffer[] = $this->caption . PHP_EOL;

        foreach ($this->tray AS $item) {
            $buffer[] = $item->makeHTML();
        }
        return implode('', $buffer);
    }
}
