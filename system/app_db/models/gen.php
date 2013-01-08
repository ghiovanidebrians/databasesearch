<?php
class Gen extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function gen_data_exp()
    {
        $category   = array('daun','lumut','alga');
        $index      = array_rand($category,1);
        $data = array(
           'species' => $this->generateRandomString(5),
           'author' => $this->generateRandomString(6),
           'source' => $this->generateRandomString(5),
           'description' => $this->generateRandomString(50),
           'image' => $this->generateRandomString(4),
           'collector' => $this->generateRandomString(8),
           'habitat' => $this->generateRandomString(5),
           'id_gallery'=> rand(1,12),
           'category'=> $category[rand(0,2)] 
        );
        $this->db->insert('biotrop__dataCollection', $data); 
    }
    
    private function generateRandomString($length = 10) {    
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}
