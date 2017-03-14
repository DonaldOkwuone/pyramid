<?php
class Locations_model extends CI_Model{

    function getLocations(){
        $query = $this->db->get('locations');
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
 
} 
    
      
    
       