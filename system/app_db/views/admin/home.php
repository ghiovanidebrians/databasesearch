    <div class="container">
      <legend>Setting Category</legend>
      <div id="search">
        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Url</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($category->result() as $row){ ?>
                <tr>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->description; ?></td>
                  <td><?php echo $row->url; ?></td>
                  <td><?php echo anchor("admin/index/?del=".$row->id_category,"Delete");?></td>
                </tr>
                <?php }?>
              </tbody>
        </table>
        
        <legend>Add Category</legend>
       <form action="<?php echo base_url();?>index.php/admin/index" method="POST">
        <fieldset>
          <input type="text" placeholder="Category..." name="category"><br/>
          <textarea rows="3" name="description" placeholder="Description..." style="width: 1100px;"></textarea>
          <span class="help-block">*add category your databases</span>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>