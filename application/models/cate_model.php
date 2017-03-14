<?php
class Cate_model extends CI_Model{

    function getCate(){
        $query = $this->db->get('categories');
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
    function getActiveCate(){
       
        return $this->uri->segment(3);
       
   }
} 
    
      
    
       