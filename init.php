<?php

$memcached = new Memcached();
$memcached->addServer(HOSTNAME, PORT);
$keys = $memcached->getAllKeys();
$servers = $memcached->getStats();