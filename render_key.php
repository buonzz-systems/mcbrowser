<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          
          <h2 class="sub-header">Value of "<?php echo $key;?>"</h2>         
          <div class="well">
          	<?php echo var_export($value, TRUE); ?>
          </div>
          <hr/>
           <div class="btn-group">
            <button type="button" class="btn btn-default">Delete</button>
            <button type="button" class="btn btn-default">Edit</button>
            <button type="button" class="btn btn-default">Expand</button>
          </div>          
  		</div>