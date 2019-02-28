<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-02-25
 * Time: 18:43
 */

final class RomeoJuliet extends book
{
    public function accelerate(): int
    {
        return 2;
    }

    public function decelerate(): int
    {
        return -2;
    }
}