<?php

include "header.php";

require "config.php";
require "init.php";

$key = isset($_GET['key']) ? $_GET['key'] : '';

$value = $memcached->get($key);
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php include "sidebar.php";?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
          <h2 class="sub-header">Value of "<?php echo $key;?>"</h2>
          <div class="well">
          	<?php echo var_export($value, TRUE); ?>
          </div>
  		</div>
      </div>
    </div>
<?php include "footer.php"; ?>
