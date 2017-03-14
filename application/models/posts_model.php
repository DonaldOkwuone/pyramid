<?php
class Posts_model extends CI_Model{

    function getPost(){
        $query = $this->db->get('posts');
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
        function getCustomPosts(){
        $sql = "SELECT * FROM `users` as u join `posts` as p on u.`username` = p.`username` order by `time` desc";    
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
 
        function getPosts_byCate(){
        $query = $this->db->get_where('posts',array('location' => $this->input->post('location'), 
                                                    'category' => urldecode($this->uri->segment(3))));

        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
    
        function getProd_byID(){
        $query = $this->db->get_where('products',array('id' => $this->uri->segment(3)));
        if ($query->num_rows() > 0){
         foreach ($query->result() as $row){
                $data[] = $row;
                  }
                return $data;
        }
    }
    
        function updateProd(){ 
      
            $data = array(
            'product' => $this->input->post('prod'),
            'desc' => $this->input->post('desc')
               
        );    
        $this->db->where('id',$this->input->post('id'));

        $this->db->update('products', $data);
    
        }
    
        function deleteProd(){ 
         
        $this->db->where('id',$this->input->post('id'));

        $this->db->delete('products');
    
        }
    
}