<?php

require "config.php";
require "functions.php";
require "init.php";

$keys = $memcached->getAllKeys();
$selected_key = isset($_GET['key']) ? $_GET['key'] : '';

if(count($keys)>0) 
{
  foreach($keys as $k)
  {
  	if($selected_key == $k)
    	echo '<li class="active"><a alt="'.$k.'" href="show_key.php?key='.urlencode($k).'"><span class="glyphicon glyphicon-file"></span>&nbsp;'. limit_string($k, 15).'</a></li>';
    elseif($selected_key == '')
    	echo '<li><a alt="'.$k.'" href="show_key.php?key='.urlencode($k).'"><span class="glyphicon glyphicon-file"></span>&nbsp;'.limit_string($k,15).'</a></li>';
   	else
   		echo '<li><a alt="'.$k.'" href="show_key.php?key='.urlencode($k).'"><span class="glyphicon glyphicon-file"></span>&nbsp;'.limit_string($k,15).'</a></li>';
  }
}
else
 echo '<div class="alert alert-info" role="alert">
        Seems you got no memcache contents right now<br/>
        <a href="add_key.php" class="alert-link">Add New Entry Now</a>
      </div>';
?>  

