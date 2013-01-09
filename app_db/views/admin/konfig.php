    <div class="container">
        <legend>Konfigurasi Data Item</legend>
        <form action="<?php echo base_url();?>index.php/admin/index" method="POST">
        <fieldset>
          <input type="text" placeholder="Species..." name="species"><br/>
          <input type="text" placeholder="Author..." name="author"><br/>
          <input type="text" placeholder="Source..." name="source"><br/>
          <textarea rows="3" name="description" placeholder="Description..." style="width: 1100px;"></textarea>
          <input type="text" placeholder="Galley..." name="Galley"><br/>
          <input type="text" placeholder="Collector..." name="collector"><br/>
          <input type="text" placeholder="Habitat..." name="habitat"><br/>
          <input type="text" placeholder="Category..." name="category"><br/>
          <span class="help-block">*add category your databases</span>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>