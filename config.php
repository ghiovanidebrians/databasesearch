<?php
define("TITLE_SITE",            "Database-search");
define("TITLE_FOOTER",          "Database");
define("DESCRIPTION",           "");
define("META-DATA",             "");
define("KEYWORD",               "");

define("VERSION",               "0.1");
define("DATE",                  "");

define("LOCALHOST",             "localhost");   #nama host
define("USER",                  "root");        #username database
define("PASSWORD",              "root");    #password database
define("DATABASE",              "biotrop");  #nama database

define("BASE_URL",              "http://".$_SERVER['HTTP_HOST']."/databasesearch/");
define("PATH_URL",              $_SERVER['DOCUMENT_ROOT']."/databasesearch/");

define("FILE",                  BASE_URL."assets/file/");
define("FILE_PATH",             PATH_URL."assets/file/");    

define("IMAGES",                BASE_URL."assets/img/");
define("IMAGES_PATH",           PATH_URL."assets/img/");

define("JAVASCRIPT",            BASE_URL."assets/js/");
define("JAVASCRIPT_PATH",       PATH_URL."assets/js/");

define("CSS",                   BASE_URL."assets/css/");
define("CSS_PATH",              PATH_URL."assets/css/");

define("LOG",                   BASE_URL."assets/log/");
define("LOG_PATH",              PATH_URL."assets/log/");

define("THUMB",                 FILE."images/thumb/");
define("THUMB_PATH",            FILE_PATH."images/thumb/");

define("ORI",                   FILE."images/original/");
define("ORI_PATH",              FILE_PATH."images/original/");

define("SLIDE",                 FILE."images/slide/");
define("SLIDE_PATH",            FILE_PATH."images/slide/");

define("BANNER",                FILE."banner/");
define("BANNER_PATH",           FILE_PATH."banner/");

define("PARTNER",               FILE."partner/");
define("PARTNER_PATH",          FILE_PATH."partner/");
?>
