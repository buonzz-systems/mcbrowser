<?php

include "header.php";
require "config.php";
require "functions.php";
require "init.php";
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php  include "sidebar.php"; ?>        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
          <h2 class="sub-header">Flush All Items in Memcache</h2>
          <p>You sure you want to do this?</p>          
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>