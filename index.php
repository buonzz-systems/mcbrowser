<?php

include "header.php";

require "config.php";
require "functions.php";
require "init.php";

$server_stats= $memcached->getStats();

?>
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
 	<?php include "header_menu.php";?>
 </div>

    <div class="container-fluid">
      <div class="row">
        <?php include "sidebar.php";?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
          <h2 class="sub-header">Servers Statistics</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr> 
                  <th>Server</th>               
                  <th>Stat Name</th>
                  <th>Current Status</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach($server_stats as $server=>$stats)
                {
                  foreach($stats as $statk => $statv)
                  {
              ?>
                <tr>                  
                  <td><?php echo $server;?></td>
                  <td><?php echo $statk;?></td>
                  <td><?php echo $statv;?></td>
                </tr>              
              <?php 
                  }
                } 
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php include "footer.php"; ?>