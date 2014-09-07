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
          <div class="alert alert-danger" role="alert">
        	This will delete all the key/values stored in your server!<br/>
        	That would means all applications using those data won't find those keys anymore. Proceed with caution!<br/>
        	<a href="flush_all_confirmed.php" class="alert-link">Flush All Memcache Entried Now</a>
      	  </div>        
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>