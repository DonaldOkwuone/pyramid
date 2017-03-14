<?php
class ph_model extends CI_Model{
       
    function postAmount(){
       
        $today = date('Y-m-d');
        $timestamp = date('Y-m-d H:i:s');
        $txn_id = substr(number_format(time() * rand(),0,'',''),0,5);
        
        $sql = "SELECT * FROM `percentage`";    
        $query = $this->db->query($sql);
        $row = $query->row();
        
        
            $data = array(
            'amount' => str_replace(",","",$this->input->post('amt')),
            'cap' => str_replace(",","",$this->input->post('amt')) * ($row->percent/100) + str_replace(",","",$this->input->post('amt')),   
            'username' => $_SESSION['logname'],
            'date' => $today,
            'time' => $timestamp,
            'matched' => 'Pending', 
            'txn_id'=> $txn_id,   
            'status' => 'Pending'
               
        );    

        $this->db->insert('ph', $data);
        }
       
       function getHist(){
       
        $query = $this->db->get('ph');
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
        }
       function trackPh(){
       
        $query = $this->db->get_where('ph',array('matched' => 'Pending'));
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
       }  
           function getPh(){
       
        $query = $this->db->get_where('ph',array('id' => $this->uri->segment(3)));
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
       } 
           function getMatch(){
        $sql = $this->db->query("select `matched_with` from `ph` where `id` = '".$this->uri->segment(3)."'");
        $row = $sql->row();
        
        $query = $this->db->get_where('users',array('username' => $row->matched_with));
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
       } 
     
          function getPhAmt(){
        $query = $this->db->query("select `amount` from `ph` where `id` = '".$this->uri->segment(3)."'");
        
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
       } 
           function getUsers(){
       
        $query = $this->db->query("select `username` from `users` where `blocked` != 'Blocked' and `username` != 'admin' ");
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
        }
       function matchPh(){ 
   
            $data = array(
            'matched' => 'Matched',
            'auth' => $_SESSION['logname']
        );    
        $this->db->where('id',$this->uri->segment(3));
        $this->db->update('ph', $data);
         
        }
       function matchPhB($i){ 
        $sql = $this->db->query("select * from `ph` where `id` = '".$this->uri->segment(3)."'");
        $row = $sql->row();
        
            $data = array(
            'username' => $row->username,
            'amount' => $row->amount,
            'cap' => $row->cap,
            'time' => $row->time,    
            'matched_with' => $this->input->post('payee')[$i],
            'amt_matched' => $this->input->post('amt_to')[$i],    
            'txn_id' => $row->txn_id,
            'auth' => $_SESSION['logname']
        );    
        
        $this->db->insert('matches', $data);
        }     

     }
    
    
    
    
