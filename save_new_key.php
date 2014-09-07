<?php

include "header.php";

require "config.php";
require "functions.php";
require "init.php";

$key = isset($_POST['txtKey']) ? $_POST['txtKey'] : '';
$value = isset($_POST['txtValue']) ? $_POST['txtValue'] : '';
$expire = isset($_POST['txtExpire']) ? $_POST['txtExpire'] : 0;

$memcached->set($key,$value,$expire);
$result = $memcached->getResultCode();

?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php  include "sidebar.php"; ?>        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php if($result == 0){ ?>          
          <h2 class="sub-header">Key was successfully Added!</h2>                          
          <p><a href="show_key.php?key=<?php echo $key;?>">Check</a> the value of your new key</p>
          <?php }else{ ?>
          <h2 class="sub-header">Error in adding Key</h2>
          <div class="well">
          	<?php 
          		echo result_code_to_string($result);
          	?>
          <div>
          <?php } ?>
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>