<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/12/2019
 * Time: 11:35 PM
 */

class RomeoJuliet extends book
{
    public function BookGenre(String $input): String
    {
        if (strpos($input, "Comedy")) {
            echo("This book is a comedy");
        } else if (strpos($input, "Tragedy")) {
            echo("This Shoe is a tragedy");
        }
    }
    public function Original Language(String $input): String
    {
        if (strpos($input, "English")) {
            echo("This book was originally written in English);
        }

        else if (strpos($input, "Latin")) {
            echo("This was originally written in Latin");
        }
    }
}