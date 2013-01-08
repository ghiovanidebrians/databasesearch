    <div class="container">          
    <?php foreach ($species->result() as $row){?>
    <legend><?php echo $row->species;?></legend>
       <table border=0>
        <tr class="success">
            <td width="100" >Species</td>
            <td>:</td>
            <td> <?php echo $row->species;?></td>
        </tr>
        <tr class="success">    
            <td>Author</td>
            <td>:</td>
            <td> <?php echo $row->author;?></td>
        </tr>    
        <tr class="success">    
            <td>Source</td>
            <td>:</td>
            <td> <?php echo $row->source;?></td>
        </tr>    
        <tr class="success">    
            <td>Description </td>
            <td></td>
            <td></td>
        </tr>    
        <tr class="success">    
            <td></td>
            <td></td>
            <td>
                <p><i>"<?php echo $row->description;?>"</i>
                </p>
            </td>
        </tr>    
        <tr class="success">    
            <td>Image</td>
            <td></td>
            <td></td>
        </tr>    
        </tr>    
        <tr class="success">
            <td></td>
            <td></td>
            <td>
            <?php
                  $species_image  = $this->welcome_model->get_data_gallery($this->uri->segment(4));
                  if($species_image->num_rows() != 0)
                  {
            ?>
            <ul class="thumbnails">
                <?php
                    foreach($species_image->result() as $row){
                ?>
                <li class="span2">
                  <a href="<?php echo IMAGES?><?php echo $row->file_name; ?>_1.gif" class="thumbnail" >
                    <img src="<?php echo IMAGES?><?php echo $row->file_name; ?>.gif" alt="gallery thumbnail">
                  </a>
                </li>
                <?php   }
                ?>
            </ul>
            <?php 
                  }else{
            ?>
            <p><i>"images not found"</p><i></p>
            <?php
                }
            ?>
            </td>
        </tr>    
        <tr class="success"> 
            <td>Collector</td>
            <td>:</td>
            <td> <?php echo $row->collector;?></td>
        </tr>    
        <tr class="success"> 
            <td>Habitat</td>
            <td>:</td>
            <td> <?php echo $row->habitat;?></td>
        </tr>    
        <tr class="success">    
            <td>Maps</td>
            <td></td>
            <td></td>
        </tr>
       </table>
       <?php } ?>
