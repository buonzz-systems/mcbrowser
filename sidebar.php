<div class="col-sm-3 col-md-2 sidebar">
<ul class="nav nav-sidebar">
<?php
if(count($keys)>0) 
{
  foreach($keys as $k)
  {
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