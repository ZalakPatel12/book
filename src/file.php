<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-02-25
 * Time: 18:38
 */

class file
{
    public static function readCSVtoArray(String $filename, String $class) :array
    {
        $records = Array();
        $count = 0;
        $fieldNames = '';

        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if($count == 0) {
                    $fieldNames = $row;
                } else {
                    $records[] = (object) array_combine($fieldNames, $row);
                }
                $count++;
            }
            fclose($handle);
        }

        return $records;
    }


}