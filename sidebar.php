<?php 

$selected_key = isset($_GET['key']) ? $_GET['key'] : '';

?>
<div class="col-sm-3 col-md-2 sidebar">
<ul class="nav nav-sidebar">
<?php
if(count($keys)>0) 
{
  foreach($keys as $k)
  {
  	if($selected_key == $k)
    	echo '<li class="active"><a href="show_key.php?key='.$k.'">'.$k.'</a></li>';
    elseif($selected_key == '')
    	echo '<li><a href="show_key.php?key='.$k.'">'.$k.'</a></li>';
   	else
   		echo '<li><a href="show_key.php?key='.$k.'">'.$k.'</a></li>';
  }
}
else
 echo '<div class="alert alert-info" role="alert">
        Seems you got no memcache contents right now
        <a href="populate.php" class="alert-link">Click this to input sample keys</a>
      </div>';
?>  
</ul>
</div>