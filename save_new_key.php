<?php

include "header.php";

require "config.php";
require "functions.php";
require "init.php";

$key = isset($_POST['txtKey']) ? $_POST['txtKey'] : '';
$value = isset($_POST['txtValue']) ? $_POST['txtValue'] : '';

$memcached->set($key,$value);

?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php  include "sidebar.php"; ?>        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
          <h2 class="sub-header">Key was successfully Added!</h2>                          
          <p><a href="show_key.php?key=<?php echo $key;?>">Check</a> the value of your new key</p>
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>