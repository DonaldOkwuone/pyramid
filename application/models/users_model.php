<?php
class Users_model extends CI_Model{
       
    function signinUsers(){
       
        $query = "select `username` from `users` where `username`='".$this->input->post('user')."' ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0){ // username exists
            $query2 = "select * from users where username = '".$this->input->post('user')."' AND password1 = md5('".$this->input->post('pass')."') AND password2 = md5('".$this->input->post('pass')."')";
            $result2 = $this->db->query($query2);
            
           if($result2->num_rows() > 0){
                //password is correct, goto your home  
               
               $row = $result2->row();
               $_SESSION['who'] = $row->who;
               $_SESSION['auth'] = 'yes';
               $logname = $this->input->post('user');
               $_SESSION['logname'] = $logname; 
              
           
               redirect(site_url('site/signed_in'));
          
            }
        }
    }
    
    function  passFail(){
        $query = "select `username` from `users` where `username`='".$this->input->post('user')."' ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0){ // username exists
            $query2 = "select * from users where username = '".$this->input->post('user')."' AND password1 = md5('".$this->input->post('pass')."') AND password2 = md5('".$this->input->post('pass')."')";
            $result2 = $this->db->query($query2);
            
            if($result2->num_rows() == 0){
                //password is incorrect, error message  
                      $data = "Username exists but password is incorrect!";
                      return $data;
           
            }
        }
        
       }
        
    function  nonExist(){
        $query = "select `username` from `users` where `username`='".$this->input->post('user')."' ";
        $result = $this->db->query($query);
        if ($result->num_rows() == 0){ // username does not exists
             $data = "The Username entered does not exist!";
             return $data;;
            
             }
          } 
          
       function insertBio(){ 
      
            $data = array(
            'accname' => $this->input->post('accname'),
            'accno' => $this->input->post('accno'),
            'bank' => $this->input->post('bank'),
            'phone' => $this->input->post('phone')                    
               
        );    
        $this->db->where('username',$_SESSION['logname']);

        $this->db->update('users', $data);
    
        }         
          
        function resetPass(){ 
      
            $data = array(
            'password1' => md5($this->input->post('psw')),
            'password2' => md5($this->input->post('psw2'))                   
               
        );    
        $this->db->where('username',$_SESSION['logname']);

        $this->db->update('users', $data);
    
        }   
         
          
      }//end
         
    
        

    
    
    
    
