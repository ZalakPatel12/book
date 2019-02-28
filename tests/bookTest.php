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

    public function testBookAccelerate() :void
    {
        $this->assertTrue(
            method_exists(book::class, 'accelerate')
        );
    }

    public function testBookDecelerate() :void
    {
        $this->assertTrue(
            method_exists(book::class, 'decelerate')
        );
    }

    public function testRomeoJulietAccelerate(): void
    {
        $romeoJuliet = new RomeoJuliet();

        $this->assertEquals(1, $romeoJuliet->accelerate());
    }

    public function testRomeoJulietDecelerate(): void
    {
        $romeoJuliet = new RomeoJuliet();

        $this->assertEquals(-1, $romeoJuliet->decelerate());
    }

    public function testMacbethAccelerate(): void
    {
        $macbeth = new Macbeth();

        $this->assertEquals(1, $macbeth->accelerate());
    }

    public function testMacbethDecelerate(): void
    {
        $macbeth = new Macbeth();

        $this->assertEquals(-1, $macbeth->decelerate());
    }


}