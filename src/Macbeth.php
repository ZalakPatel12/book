<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-02-25
 * Time: 18:45
 */

class Macbeth extends book
{
    public function accelerate(): int
    {
        return 1;
    }

    public function decelerate(): int
    {
        return -1;
    }
}