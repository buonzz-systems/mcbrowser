<?php

$memcached = new Memcached();

foreach($servers as $server)
	connect($server['hostname'], $server['port']);

$keys = $memcached->getAllKeys();