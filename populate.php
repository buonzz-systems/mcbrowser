<?php

require "config.php";
require "init.php";


$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$memcached->setMulti($items, time() + 300);

header('location:index.php');