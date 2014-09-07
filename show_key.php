<?php

include "header.php";

require "config.php";
require "functions.php";
require "init.php";

$key = isset($_GET['key']) ? $_GET['key'] : '';
$value = $memcached->get($key);  
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php 
          include "sidebar.php";

          if($value === FALSE)
            include "render_invalid_key.php";
          else
            include "render_key.php";
        ?>        
      </div>
    </div>
<?php include "footer.php"; ?>
