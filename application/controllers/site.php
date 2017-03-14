<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

       function index(){
       $this->load->view('site/signup');
    }
     
       function signIn(){
        session_start();   
        $this->load->model('users_model');
        $this->users_model->signinUsers();
        
        $data['error_msg_1'] = $this->users_model->passFail();
        $data['error_msg_2'] = $this->users_model->nonExist();
        $this->load->view('site/signin', $data);
    }
       function signed_in(){
        session_start();
        if($_SESSION['who'] == 'user'){
        $this->load->view('user/index');
        }
        elseif($_SESSION['who'] == 'admin'){
        $this->load->view('admin/index');
        }
    }
       function signin_page(){
        session_start();
        $this->load->view('site/signin');
    }
       function signup_page(){
        $this->load->view('site/signup');
    }
       function recover_page(){
        $this->load->view('site/recover');
    }
       function update_bio_page(){
        session_start();
        $this->load->view('user/update_bio');
    }
       function reset_pass_page(){
        session_start();
        if($_SESSION['who'] == 'user'){
        $this->load->view('user/reset_pass');
        }
        elseif($_SESSION['who'] == 'admin'){
        $this->load->view('admin/reset_pass');
        }
    }
       function reset_pass(){
        session_start();
        $this->load->model('users_model');
        $this->users_model->resetPass(); 
        $data['msg'] = 'Password Changed!';
        if($_SESSION['who'] == 'user'){
        $this->load->view('user/reset_pass',$data);
        }
        elseif($_SESSION['who'] == 'admin'){
        $this->load->view('admin/reset_pass',$data);
        }
    }
        function set_percent_page(){
        session_start();
        $this->load->model('percent_model');
        $data['percent'] = $this->percent_model->getPercent(); 
        $this->load->view('admin/set_percent',$data);
        
    }
        function set_percent(){
        session_start();
        $this->load->model('percent_model');
        $this->percent_model->setPercent();
        $data['msg'] = 'Percentage set!';
        $this->load->view('admin/set_percent',$data);
        
    }
       function provide_help_page(){
        session_start();
        $this->load->view('user/provide_help');
    }
       function provide_help(){
        session_start();
        $this->load->model('ph_model');
        $this->ph_model->postAmount();
        $data['msg'] = 'Amount Pledged!';
        $this->load->view('user/provide_help',$data);
    }
       function track_ph_page(){
        session_start();
        $this->load->model('ph_model');
        $data['donations'] = $this->ph_model->trackPh();
        $this->load->view('admin/ph_history',$data);
    }
       function match_ph_page(){
        session_start();
        $this->load->model('ph_model');
        $data['donations'] = $this->ph_model->getPh();
        $data['payees'] = $this->ph_model->getUsers();
        $this->load->view('admin/match_ph',$data);
    }
       function match_ph(){
        session_start();
        $this->load->model('ph_model');
        $data['donations'] = $this->ph_model->getPh();
        $data['payees'] = $this->ph_model->getUsers();  
        
        if(isset($_POST['match'])){
        $this->ph_model->matchPh(); 
        for($i=0;$i<$_POST['fields'];$i++){
        $this->ph_model->matchPhB($i);
        }
        $data['msg'] = 'PH matched!';
        }
        
        $this->load->view('admin/match_ph',$data);
    }
       function get_match(){
        session_start();
        $this->load->model('ph_model');
        $data['details'] = $this->ph_model->getMatch();
        $data['amts'] = $this->ph_model->getPhAmt();
        $this->load->view('user/get_match',$data);
    }
       function insert_bio(){
        session_start();
        $this->load->model('users_model');
        $this->users_model->insertBio(); 
        $data['msg'] = 'Bio Updated!';
        $this->load->view('user/update_bio',$data);
    }
       function get_hist_page(){
        session_start();
        $this->load->model('ph_model');
        $data['donations'] = $this->ph_model->getHist();
        $this->load->view('user/history',$data);
    }
       function post_ad_page(){
        session_start();
        $this->load->model('cate_model');
        $data['cates'] = $this->cate_model->getCate(); # pass cate list
        $this->load->model('locations_model'); 
        $data['locations'] = $this->locations_model->getLocations(); # pass locations
        $this->load->view('user/post_ad',$data);
    }
       function post_ad(){
        session_start();
        $this->load->model('ads_model');
        $data['msg'] = $this->ads_model->postAd(); # post the ad
        
        $this->load->model('cate_model');
        $data['cates'] = $this->cate_model->getCate(); # pass cate list
        $this->load->model('locations_model'); 
        $data['locations'] = $this->locations_model->getLocations(); # pass locations
        $this->load->view('user/post_ad',$data);
    }
       function change_pass(){
        session_start();
        $this->load->view('user/change_password');
    }
       function cate(){
        $this->load->model('cate_model'); 
        $data['cate'] = $this->cate_model->getActiveCate(); # pass active cate title
        $data['cates'] = $this->cate_model->getCate(); # pass cate list
        $this->load->model('locations_model'); 
        $data['locations'] = $this->locations_model->getLocations(); # pass locations
        
        $this->load->model('posts_model');
        //send page posts
        $data['posts'] = $this->posts_model->getPosts_byCate();
        
        $this->load->view('site/page',$data);
        
    }
   
       function logout(){
        session_start();
        session_destroy();
        redirect(base_url());
          
    }
   
}

