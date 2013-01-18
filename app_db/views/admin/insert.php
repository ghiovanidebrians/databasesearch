    <div class="container">
        <legend><i>Insert</i> Data Per Item</legend>
        <form action="<?php echo base_url();?>index.php/admin/insert" method="POST">
        <fieldset>
          <input type="text" placeholder="Species..." name="species"><br/>
          <input type="text" placeholder="Author..." name="author"><br/>
          <input type="text" placeholder="Source..." name="source"><br/>
          <textarea rows="3" name="description" placeholder="Description..." style="width: 1100px;"></textarea>
          <select name="gellery">
            <option value="">Pilih Galeri</option>
            <?php foreach ($gellery->result() as $row){?>
            <option value="<?php echo $row->gallery; ?>" ><?php echo $row->gallery;?></option>
            <?php }?>
          </select><br/>
          <input type="text" placeholder="Collector..." name="collector"><br/>
          <input type="text" placeholder="Habitat..." name="habitat"><br/>
          <select name="category">
            <option value="">Pilih Kategori</option>
            <?php foreach ($category->result() as $row){?>
            <option value="<?php echo $row->name; ?>" ><?php echo $row->name;?></option>
            <?php }?>
          </select><br/>
          <label>Maps</label><br/>
          <span class="help-block">*add category your databases</span>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>