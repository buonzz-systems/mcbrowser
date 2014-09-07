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
          <h2 class="sub-header">Add New Item</h2>
          <form role="form" action="save_new_key.php" method="POST">
            <div class="form-group">
              <label for="txtKey">Key</label>
              <input type="text" class="form-control" name="txtKey" id="txtKey" placeholder="Enter the Key">
            </div>
            <div class="form-group">
              <label for="txtValue">Value</label>
              <textarea class="form-control" id="txtValue" rows="3"  name="txtValue" placeholder="Enter the value in here"></textarea>
            </div>                        
            <button type="submit" class="btn btn-default">Save</button>
          </form>                   
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>