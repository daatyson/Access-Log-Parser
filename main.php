<?php


include_once realpath("vendor/autoload.php");


$log = file_get_contents('log.txt');
$parser = new Kparse\Parser;
$result = json_encode($parser->parse($log));
print_r($result);