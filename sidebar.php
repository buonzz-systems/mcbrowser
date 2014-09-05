<div class="col-sm-3 col-md-2 sidebar">
<ul class="nav nav-sidebar">
<?php 
foreach($keys as $k)
{
  echo '<li><a href="show_key.php?key='.$k.'">'.$k.'</a></li>';
}
?>  
</ul>
</div>