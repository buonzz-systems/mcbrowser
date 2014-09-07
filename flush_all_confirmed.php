<?php

include "header.php";
require "config.php";
require "functions.php";
require "init.php";

$result = $memcached->flush();

?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php  include "sidebar.php"; ?>        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
        <?php if($result >=0) { ?>
          <h2 class="sub-header">All Items were Flushed</h2>
          <div class="alert alert-info" role="alert">All Items in the Memcache is now flushed!<br/>
            Note that you may still see the keys on the left, but they won't be having values anymore and any retrieval operations to those keys will not succeed.<br/>
            Key listing on the left will have a slight delay to clear due to the way how memcache works. 
          </div>
        <?php }else{ ?>          
          <h2 class="sub-header">Can't Flush all items in Memcache</h2>
          <div class="alert alert-danger" role="alert">For some reasons, I can't flush the memcache items. The result code that was returned is : <?php echo $result; ?></div>
        <?php } ?>
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>