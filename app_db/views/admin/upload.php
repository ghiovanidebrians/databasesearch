    <div class="container">
        <?php if($error != ''){?>
        <div class="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Info!</strong> <?php echo $error;?>
        </div>
        <?php }?>
        
        <legend><i>Upload</i> In Zip Data [Images]</legend>
        <form action="<?php echo base_url();?>index.php/admin/unzip" method="POST" enctype="multipart/form-data">
        <fieldset>
          <input type="text" placeholder="Gallery Name..." name="gallery_name"><br/>
          <input type="file" name="zipimage"><br/>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>
        <?php if($error != ''){?>
        <table class="table table-bordered">
              <thead>
                <tr>    
                  <th>Gallery Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $gal;?></td>
                </tr>
                <?php foreach($file as $f){?>
                <tr>
                  <td>Image : <?php echo $f;?></td>
                </tr>
                <?php } ?>
              </tbody>
        </table>
        <?php }?>
        
            
        <legend><i>Upload</i> In Excel Data [Data List]</legend>
        <form action="<?php echo base_url();?>index.php/admin/insertexcel" method="POST" enctype="multipart/form-data">
        <fieldset>
          <input type="file" name="zipimage"><br/>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>