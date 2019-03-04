<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-02-25
 * Time: 18:28
 */

declare(strict_types=1);

abstract class book
{
    public $author;
    public $year;
    public $title;
    public $genre;
    public $page;

    public function bookType() :array
    {
        $array = [
            'one' => 'fiction',
            'two' => 'non-fiction'
        ];

        return $array;
    }

}