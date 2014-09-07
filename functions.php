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

function result_code_to_string($result_code){
	$codes = array(
		'00' => 'MEMCACHED_SUCCESS',
		'01' => 'MEMCACHED_FAILURE',
		'02' => 'MEMCACHED_HOST_LOOKUP_FAILURE',
		'03' => 'MEMCACHED_CONNECTION_FAILURE',
		'04' => 'MEMCACHED_CONNECTION_BIND_FAILURE', // DEPRECATED see MEMCACHED_HOST_LOOKUP_FAILURE
		'05' => 'MEMCACHED_WRITE_FAILURE',
		'06' => 'MEMCACHED_READ_FAILURE',
		'07' => 'MEMCACHED_UNKNOWN_READ_FAILURE',
		'08' => 'MEMCACHED_PROTOCOL_ERROR',
		'09' => 'MEMCACHED_CLIENT_ERROR',
		'10' => 'MEMCACHED_SERVER_ERROR', // Server returns "SERVER_ERROR"
		'11' => 'MEMCACHED_ERROR', // Server returns "ERROR"
		'12' => 'MEMCACHED_DATA_EXISTS',
		'13' => 'MEMCACHED_DATA_DOES_NOT_EXIST',
		'14' => 'MEMCACHED_NOTSTORED',
		'15' => 'MEMCACHED_STORED',
		'16' => 'MEMCACHED_NOTFOUND',
		'17' => 'MEMCACHED_MEMORY_ALLOCATION_FAILURE',
		'18' => 'MEMCACHED_PARTIAL_READ',
		'19' => 'MEMCACHED_SOME_ERRORS',
		'20' => 'MEMCACHED_NO_SERVERS',
		'21' => 'MEMCACHED_END',
		'22' => 'MEMCACHED_DELETED',
		'23' => 'MEMCACHED_VALUE',
		'24' => 'MEMCACHED_STAT',
		'25' => 'MEMCACHED_ITEM',
		'26' => 'MEMCACHED_ERRNO',
		'27' => 'MEMCACHED_FAIL_UNIX_SOCKET', // DEPRECATED
		'28' => 'MEMCACHED_NOT_SUPPORTED',
		'29' => 'MEMCACHED_NO_KEY_PROVIDED', /* Deprecated. Use MEMCACHED_BAD_KEY_PROVIDED! */
		'30' => 'MEMCACHED_FETCH_NOTFINISHED',
		'31' => 'MEMCACHED_TIMEOUT',
		'32' => 'MEMCACHED_BUFFERED',
		'33' => 'MEMCACHED_BAD_KEY_PROVIDED',
		'34' => 'MEMCACHED_INVALID_HOST_PROTOCOL',
		'35' => 'MEMCACHED_SERVER_MARKED_DEAD',
		'36' => 'MEMCACHED_UNKNOWN_STAT_KEY',
		'37' => 'MEMCACHED_E2BIG',
		'38' => 'MEMCACHED_INVALID_ARGUMENTS',
		'39' => 'MEMCACHED_KEY_TOO_BIG',
		'40' => 'MEMCACHED_AUTH_PROBLEM',
		'41' => 'MEMCACHED_AUTH_FAILURE',
		'42' => 'MEMCACHED_AUTH_CONTINUE',
		'43' => 'MEMCACHED_PARSE_ERROR',
		'44' => 'MEMCACHED_PARSE_USER_ERROR',
		'45' => 'MEMCACHED_DEPRECATED',
		'46' => 'MEMCACHED_IN_PROGRESS',
		'47' => 'MEMCACHED_SERVER_TEMPORARILY_DISABLED',
		'48' => 'MEMCACHED_SERVER_MEMORY_ALLOCATION_FAILURE',
		'49' => 'MEMCACHED_MAXIMUM_RETURN', /* Always add new error code before */
		'11' => 'MEMCACHED_CONNECTION_SOCKET_CREATE_FAILURE');
	if(array_key_exists($result_code, $codes))
		return $codes[$result_code];
	else
		return 'Unknown Error : Error Code' . $result_code;
}

function limit_string($orig, $chars){
	if(strlen($orig) > $chars)
		$output = substr($orig,0,$chars) . '...';
	else
		$output = $orig;
	return $output;
}

?>