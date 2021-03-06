<?php
class Welcome_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_data_all($key=NULL,$category=NULL)
    {
        $this->load->library('pagination');

        $config                     = array();
        $config["per_page"]         = 10;
        $config["uri_segment"]      = 4;
        $config['full_tag_open']    = "<div class='pagebar'>";
        $config['full_tag_close']   = "</div>"; 
        $config['cur_tag_open']     = "<span class='this-page'>";
        $config['cur_tag_close']    = "</span>";
        
        if($this->uri->segment(2) == 'category' AND $this->uri->segment(3) != NULL)
            $category               = $this->uri->segment(3);
        else
            $category               = NULL;
           
        $config["keycode"]      = "?keycode=".$key;
        $config["base_url"]     = base_url()."index.php/welcome/".$this->uri->segment(2)."/".$this->uri->segment(3);
        $config["total_rows"]   = $this->record_count('biotrop__dataCollection',NULL, $category);
        
        $this->pagination->initialize($config); 
        
        $page                   = ($this->uri->segment(3)) ? $this->uri->segment(4) : 0;
        $data["result"]         = $this->fetch_record($config["per_page"], $page, 'biotrop__dataCollection',NULL,$category);
        $data["pagging"]        = $this->pagination->create_links();
        return $data;
    }
    public function get_data_all_search($key=NULL,$category=NULL)
    {
        $this->load->library('pagination');

        $config                     = array();
        $config["per_page"]         = 10;
        $config["uri_segment"]      = 4;
        $config['full_tag_open']    = "<div class='pagebar'>";
        $config['full_tag_close']   = "</div>"; 
        $config['cur_tag_open']     = "<span class='this-page'>";
        $config['cur_tag_close']    = "</span>";
     
        $config["keycode"]      = "?keycode=".$key;
        $config["base_url"]     = base_url()."index.php/welcome/search/".$category;
        $config["total_rows"]   = $this->record_count_search('biotrop__dataCollection', $key,$category);
        $this->pagination->initialize($config); 
        
        $page                   = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["result"]         = $this->fetch_record_search($config["per_page"], $page, 'biotrop__dataCollection',$key, $category);
        $data["pagging"]        = $this->pagination->create_links();
        return $data;
    }
    public function record_count($table, $key=NULL, $category=NULL)
    {
         if($category != NULL)
         $this->db->where('category', $category);
         
         return $this->db->count_all_results($table);
    }
    public function record_count_search($table, $key=NULL, $category=NULL)
    {
        
         $sql = "SELECT * FROM ".$table."
                 WHERE (species LIKE '%".$key."%'  OR  species LIKE '%".$key."%' OR author LIKE '%".$key."%'  OR
                       source LIKE '%".$key."%' OR collector LIKE '%".$key."%' OR habitat LIKE '%".$key."%')";
        if($category != 'all')
        $sql  .= "AND category = '".$category."' ";
                       
                
         $result    = $this->db->query($sql);
         return  $result->num_rows();
         
         
    }
    public function fetch_record($limit, $start, $table, $key=NULL, $cat=NULL)
    {                                                    
         $this->db->from($table);
         if($cat != NULL)
         $this->db->where('category', $cat);
         $this->db->limit($limit, $start);
         return $this->db->get();
    }
    public function fetch_record_search($limit, $start, $table, $key=NULL, $cat=NULL)
    {                                     
         $sql = "SELECT * FROM ".$table."
                 WHERE (species LIKE '%".$key."%'  OR  species LIKE '%".$key."%' OR author LIKE '%".$key."%'  OR
                       source LIKE '%".$key."%' OR collector LIKE '%".$key."%' OR habitat LIKE '%".$key."%')";
                       
        if($cat != 'all')
        $sql  .= "AND category = '".$cat."' ";
        $sql  .= "LIMIT ".$start.", ".$limit."  ";
                
         return $this->db->query($sql);
    }

    public function get_data_gallery($gallery)
    {   
        $this->db->from('biotrop__foto');
        $this->db->join('biotrop__dataCollection', 'biotrop__dataCollection.image = biotrop__foto.galley');
        $this->db->like('galley', $gallery); 
        return $this->db->get();
    }
    public function get_data_spesies($cat, $gallery)
    {   
        $this->db->from('biotrop__dataCollection');
        $this->db->like('image', $gallery);
        $this->db->where('category', $cat);
        return $this->db->get();
    }
    
 }
