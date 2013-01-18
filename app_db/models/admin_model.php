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
   public function get_gellery()
   {
        $this->db->from('biotrop__gallery_all');
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
        $this->db->select('*');
        $this->db->from('biotrop__dataCollection');
        $this->db->join('biotrop__category3', 'biotrop__category3.name = biotrop__dataCollection.category');
        $this->db->where('biotrop__category3.id_category', $id);
        $query = $this->db->get();
        
        if($query->num_rows() == 0)
        {
            $this->db->delete('biotrop__category3', array('id_category' => $id));
        }else{
            //error 1 = category tersebut masih memiliki data
            redirect('/admin/index/?error=cat1', 'refresh');
        }
   }
   public function set_gellery($gallery)
   {
        $data = array(
            'gallery' => $gallery 
         );
         
         $this->db->insert('biotrop__gallery_all', $data); 
    
   }
   public function del_gellery($id)
   {
        //cek list data, if exist no delete action
        $this->db->select('*');
        $this->db->from('biotrop__gallery_all');
        $this->db->join('biotrop__foto', 'biotrop__foto.galley = biotrop__gallery_all.gallery');
        $this->db->where('biotrop__gallery_all.id_gellery', $id);
        $query = $this->db->get();
        
        if($query->num_rows() == 0)
        {
            $this->db->delete('biotrop__gallery_all', array('id_gellery' => $id));
        }else{
            //error 1 = category tersebut masih memiliki data
            redirect('/admin/konfigallery/?error=gallery1', 'refresh');
        }
   }
   public function insert_item_data($data)
   {
        $this->db->insert('biotrop__dataCollection', $data); 
    
   }
   public function set_gallery($name)
   {
        $data   = array('gallery'=>$name);
        $this->db->insert('biotrop__gallery_all', $data);
        return $name;
   }
 }
