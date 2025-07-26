<?php


namespace App\Lib;

class Card
{
    public $title;
    public $value;

    public function __construct(string $title, string $value)
    {
        $this->title = $title;
        $this->value = $value;
    }


    public static function make(string $title, string $value)
    {
        return (new self($title, $value));
    }
}
