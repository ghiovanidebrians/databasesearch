    <div class="container">
      <legend>Setting Gallery</legend>
      <div id="search">
        <?php if(isset($_GET['error']))
              {
                if($_GET['error'] == 'gallery1')
                {  
        ?>
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <h4>Warning!</h4>
          Galley tersebut masih memiliki data
        </div>
        <?php
                }
              }
        ?>
        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($gallery->result() as $row){ ?>
                <tr>
                  <td><?php echo $row->gallery; ?></td>
                  <td><?php echo anchor("admin/konfigallery/?del=".$row->id_gellery,"Delete");?></td>
                </tr>
                <?php }?>
              </tbody>
        </table>
        
        <legend>Add Gallery</legend>
       <form action="<?php echo base_url();?>index.php/admin/konfigallery" method="POST">
        <fieldset>
          <input type="text" placeholder="Gallery..." name="gallery"><br/>
          <span class="help-block">*add category your databases</span>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>