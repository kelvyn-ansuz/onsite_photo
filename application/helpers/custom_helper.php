<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function trace($var = '')
{
    echo("[" . $var . "]");
}

function echoln($str)
{
    echo($str . "\n");
}

function printObject($obj)
{
    echo("<pre>");
    print_r($obj);
    echo("</pre>");
}

function randomHash()
{
    return md5(microtime() * microtime());
}

function moneyFloat($val)
{
    return(number_format($val, 2));
}

function displayCheck($checkItem)
{
    if ($checkItem) {
        echo(" CHECKED");
    }
}

function processTime($timeString, $IsLower=true)
{
    $time_array = explode(":", $timeString);
    $min = intval($time_array[1]);

    if ($IsLower) {
        $min = floor($min/5) * 5;
        $min = substr("00" . $min, -2);
        $timeString = $time_array[0] . ":" . $min;
    } else {
        $min = ceil($min/5) * 5;
        $min = substr("00" . $min, -2);
        $timeString = $time_array[0] . ":" . $min;
    }

    return $timeString;
}

function CSVText($value)
{
    $value = str_replace('"', '""', $value);
    if (preg_match('/,/', $value) or preg_match("/\n/", $value) or preg_match('/"/', $value)) {
        return '"'.$value.'"';
    } else {
        return $value;
    }
}

function formatDate($date, $format = 'g:ia d/m/y')
{
    if(strtotime($date)) {
        return date($format, strtotime($date));
    }
    return null;
}

function echoPublished($intStatus) {
    if ($intStatus==1) {
        echo("Published");
    } else {
        echo("Not Published");
    }
}

function echoPinned($intStatus) {
    if ($intStatus==1) {
        echo("Pinned");
    } else {
        echo("-");
    }
}


function echoUserLevel($intLevel) {
    switch ($intLevel) {
        case 1:
            echo("Admin");
            break;
        case 2:
            echo("Moderator");
            break;
        default:
            break;
    }
}