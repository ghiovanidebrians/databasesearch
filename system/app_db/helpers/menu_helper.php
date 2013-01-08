<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    //get menu from category
    function menu()
    {
        $data   = array();
        $CI =& get_instance();
        
        $CI->db->select("url");
        $CI->db->from("biotrop__category3");
        $query  = $CI->db->get();
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $menu)
            {
                array_push($data,$menu['url']);
            }
        } else {
            $data[] = FALSE; 
        }
        
        return $data;
    }
    
?>
