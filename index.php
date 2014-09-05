<?php

require "config.php";
require "init.php";

$keys = $memcached->getAllKeys();

foreach($keys as $k)
{
	echo $k. '<br/>';
}