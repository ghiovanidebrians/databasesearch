<?php
class Admin_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
   public function get_category()
   {
        
        $this->db->from('biotrop__category3');
        return $this->db->get();
   }
   
   public function set_category($category,$description)
   {
        $data = array(
            'name' => $category ,
            'description' => $description ,
            'url' => $category
         );
         
         $this->db->insert('biotrop__category3', $data); 
    
   }
   public function del_category($id)
   {
        //cek list data, if exist no delete action
        $this->db->delete('biotrop__category3', array('id_category' => $id)); 
   }
 }
