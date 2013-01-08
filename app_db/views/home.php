    <div class="container">
      <legend>Native Database</legend>
      <div id="search">
      <fieldset>
          <form action = "<?php echo base_url();?>index.php/welcome/search/all" method="get" class="form-search">
            <input type="text" class="input-xlarge search-query" placeholder="Keycode ..." name="keycode" value="<?php echo isset($key)? $key:""?>" >
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
      </fieldset>
      </div>