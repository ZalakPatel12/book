<?php
/**
 * Created by PhpStorm.
 * User:
 * Date:
 * Time:
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class bookTest extends TestCase
{
    public function testArray()
    {

        $book = RomeoJuliet();

        $bookType = $book->bookType();
        $this->assertArrayHasKey('one', $bookType);
        $this->assertArrayHasKey('two', $bookType);
    }

}