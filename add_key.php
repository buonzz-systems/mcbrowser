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
             <div class="form-group">
              <label for="txtExpire">Expire</label>
              <input type="text" class="form-control" name="txtExpire" id="txtExpire" placeholder="Enter the Expiration Value" value="0">
              <span class="help-block">Number of seconds since January 1, 1970, as an integer or a number of seconds starting from current time. In the latter case, this number of seconds may not exceed 60*60*24*30 (number of seconds in 30 days); if the expiration value is larger than that, the server will consider it to be real Unix time value rather than an offset from current time</span>
            </div>                       
            <button type="submit" class="btn btn-default">Save</button>
          </form>                   
      </div>
      </div>
    </div>
<?php include "footer.php"; ?>