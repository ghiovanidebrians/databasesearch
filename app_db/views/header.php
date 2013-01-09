<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE_SITE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo CSS;?>bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
      
      #preview {
	position:absolute;
	border:1px solid #ccc;
	background:#333;
	padding:5px;
	display:none;
	color:#fff;
      }
    </style>
    <link href="<?php echo CSS;?>bootstrap-responsive.css" rel="stylesheet">
    <style type='text/css'>
        span.hilite {background:yellow}
    </style>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url();?>"><?php echo TITLE_SITE; ?></a>
          <div class="nav-collapse">
	    <?php $menu = $this->uri->segment(3); ?>
            <ul class="nav">
              <li class="<?php echo ($this->uri->segment(2) == 'index' OR $this->uri->segment(2) == NULL OR $menu == 'all')?'active':'';?>">
		<a href="<?php echo base_url();?>"><i class="icon-home icon-white"></i> Home</a>
	      </li>
              <?php
                  $data = menu();
                  for($i=0; $i<count($data); $i++)
                  { 
              ?>
                <li class="<?php echo ($menu == $data[$i])?'active':'';?>">
                  <a href="<?php echo base_url();?>index.php/welcome/category/<?php echo $data[$i]; ?>">
                    <i class="icon-bookmark icon-white"></i> <?php echo ucfirst($data[$i]); ?>
                  </a>
                </li>
              <?php
                  }
              ?>
               <li class=""><a href="<?php echo base_url();?>index.php/welcome/about"><i class="icon-user icon-white"></i> About Us</a></li>
              <li class=""><a href="<?php echo base_url();?>index.php/admin"><i class="icon-briefcase icon-white"></i> Admin</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
