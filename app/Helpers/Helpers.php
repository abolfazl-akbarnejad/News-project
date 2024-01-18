<?php

use Morilog\Jalali\Jalalian;

function jalaliDate($date, $format = '%A, %d %B %y')
{
    return $jalaliDate = Jalalian::forge($date)->format($format);
}


function delete_file($path)
{
    if (file_exists($path)) {
        unlink($path);
    }
}
