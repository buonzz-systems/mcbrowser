<?php

function connect($server,$port){

	global $memcached;
	$existing_servers = $memcached->getServerList();

	if(is_array($existing_servers)){ 				
		foreach ($existing_servers as $server)
		{			
			if($server['host'] == $server && $server['port'] == $port) 
		    {		    
		      return true; 
		    }
		}
	}

	return $memcached->addServer($server, $port); 
} // connect

?>