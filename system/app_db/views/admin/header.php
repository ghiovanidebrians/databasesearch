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
          <a class="brand" href="<?php echo base_url();?>">admin@Database</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="<?php echo ($this->uri->segment(2) == 'index' OR $this->uri->segment(2) == NULL)?'active':'';?>">
		<a href="<?php echo base_url();?>"><i class="icon-align-justify icon-white"></i> Kategori Database</a>
	      </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
