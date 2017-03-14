<?php
class ads_model extends CI_Model{
       
    function postAd(){
       
            $data = array(
            'category' => $this->input->post('cate'),
            'location' => $this->input->post('location'),
            'title' => $this->input->post('title'),
            'post' => $this->input->post('pitch'),
            'username' => $_SESSION['logname'],
            'time' => date('Y-m-d H:i:s')    
               
        );    
       
        $result = $this->db->insert('posts', $data);
        if($result){
                //post successful
                      $data = "ad post successful!";
                      return $data;
           
            }
       
         }
       
   
  }
         
          
        

    
    
    
    
