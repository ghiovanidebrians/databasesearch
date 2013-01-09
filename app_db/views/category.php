    <div class="container">
      <legend>Database <?php echo ucfirst($category);?></legend>
      <label id="button-search" style="text-align:right;float:right;padding: 15px;">
        <span class="label"><i class="icon-minus icon-white"></i> Search</span>
      </label>
      <div id="search" style="display : 'inline-block'">
      <form action = "<?php echo base_url();?>index.php/welcome/search/<?php echo $category;?>" method="get" >
          <fieldset>
            <label>Keycode</label>
            <input type="text" class="input-xlarge" placeholder="Keycode ..." name="keycode" value="<?php echo isset($key)? $key:""?>">
            <span class="help-block"><i>input your keycode.</i></span>
            <button type="submit" class="btn btn-primary">Search</button>
          </fieldset>
      </form>
      </div>
      <?php
          $number = 1;  
          if($category == NULL){
      ?>
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>Warning!</h4>
        Category Database is not found.
      </div>
      <?php }else{?>
      <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Species</th>
                  <th>Author</th>
                  <th>Source</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Collector</th>
                  <th>Habitat</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($species['result']->result() as $row){ ?>
                <tr>
                  <td><?php echo $number; ?></td>  
                  <td><?php echo $row->species;?></td>
                  <td><?php echo $row->author;?></td>
                  <td><?php echo $row->source;?></td>
                  <td><?php echo $row->description;?></td>
                  <td>
                      <a href="<?php echo base_url(); ?>index.php/welcome/images/<?php echo $category."/".$row->image;?>">
                      <i class="icon-search"></i> <?php echo $row->image;?>
                      </a>
                  </td>           
                  <td><?php echo $row->collector;?></td>
                  <td><?php echo $row->habitat;?></td>
                 <?php
                      $number++;
                      }
                 ?>
                </tr>
              </tbody>
        </table>
        <div>
                 <?php echo $species['pagging']; ?>
        </div>
        <?php } ?>
        
