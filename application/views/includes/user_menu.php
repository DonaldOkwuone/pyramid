<?php  
$currentPage = site_url('site/'.$this->uri->segment(2));
//hijack fix
        if(($_SESSION['auth'])!='yes'){
           
          redirect(base_url());
     }

?>
<ul class="user dash">
    <li <?php if ($currentPage == site_url('site/update_bio_page') || $currentPage == site_url('site/insert_bio')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/update_bio_page'); ?>">Update Bio</a></li>              
    <li <?php if ($currentPage == site_url('site/provide_help_page') || $currentPage == site_url('site/provide_help')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/provide_help_page'); ?>">Provide Help</a></li>
    <li <?php if ($currentPage == site_url('site/get_hist_page') || $currentPage == site_url('site/get_match')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/get_hist_page'); ?>">My History</a></li> 
    <li <?php if ($currentPage == site_url('')) {echo 'id="here"';} ?>><a href="<?php echo site_url(''); ?>">Contact Support</a></li> 
    <li <?php if ($currentPage == site_url('site/reset_pass_page') || $currentPage == site_url('site/reset_pass')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/reset_pass_page'); ?>">Change Password</a></li>
              
</ul>