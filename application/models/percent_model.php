<?php
class percent_model extends CI_Model{
       
    function getPercent(){
       
        $query = $this->db->get('percentage');
        if ($query->num_rows() > 0){
         $row = $query->row();
         $percent = $row->percent;
        }
                return $percent;
        }
       
   
  
       function setPercent(){
        $sql = "SELECT * FROM `percentage`";    
        $query = $this->db->query($sql);
        $row = $query->row();
        
        
            $data = array(
            'percent' => $this->input->post('percent')                   
               
        );    
        $this->db->where('percent',$row->percent);

        $this->db->update('percentage', $data);
    
   
  }      
         
        
}
    
    
    
    
