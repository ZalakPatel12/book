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
    public function testArray() {

        $book = new RomeoJuliet();

        $bookType = $book->bookType();
        $this->assertArrayHasKey('one', $bookType);
        $this->assertArrayHasKey('two', $bookType);
    }

    public function testCanCreateRomeoJuliet(): void
    {
        $book = new RomeoJuliet();

        $this->assertInstanceOf(RomeoJuliet::class, $book);
    }

    public function testCanCreateMacbeth() :void
    {
        $book = new Macbeth();

        $this->assertInstanceOf(Macbeth::class, $book);
    }

    public function testBookHasPage(): void
    {
        $this->assertclassHasAttribute('page', Book::class);

    }



}