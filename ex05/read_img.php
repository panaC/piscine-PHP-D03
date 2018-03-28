<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 28/03/18
 * Time: 12:08
 */

header('Content-Type: image/png');

$f = readfile("../img/42.png");
echo $f;

?>