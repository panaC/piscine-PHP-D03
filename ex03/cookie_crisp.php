<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 27/03/18
 * Time: 20:22
 */

if (isset($_COOKIE['array'])) {
    $arr = unserialize($_COOKIE['array']);
} else
    $arr = array();

if (isset($_GET['action']) && isset($_GET['name']))
{
    if ($_GET['action'] === "set" && isset($_GET['value'])){
        $arr[trim($_GET['name'])] = trim($_GET['value']);
        setcookie("array", serialize($arr));

    } else if ($_GET['action'] === "get") {
        if (isset($arr[trim($_GET['name'])])) {
            echo $arr[trim($_GET['name'])] . "\n";
        }
    } else if ($_GET['action'] === "del"){
        setcookie("array", serialize($arr));
    }
}

?>