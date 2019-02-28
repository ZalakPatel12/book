<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-02-25
 * Time: 19:40
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{

    public function testDataDirectory() {
        $this->assertDirectoryExists('data');
    }
    public function testCSVFileExists() {
        $this->assertFileExists('data/data.csv');
    }

    public function testFileObject() {
        $this->assertInstanceOf(File::class, new File());
    }

    public function testReadCSVtoArrayExists() {

        $this->assertTrue(
            method_exists(File::class, 'readCSVtoArray')
        );
    }

    public function testReadCSVtoArray() {

        $records = File::readCSVtoArray("data/data.csv",'Car');
        print_r($records);

    }
}