<?php  
$currentPage = site_url('site/'.$this->uri->segment(2));
//hijack fix
        if(($_SESSION['auth'])!='yes'){
           
          redirect(base_url());
     }
     
?>
<ul class="user dash">
        <li <?php if ($currentPage == site_url('site/track_ph_page') || $currentPage == site_url('site/match_ph') || $currentPage == site_url('site/match_ph_page')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/track_ph_page'); ?>">Track PH Pledges + Match</a></li>
        <li <?php if ($currentPage == site_url('')) {echo 'id="here"';} ?>><a href="<?php echo site_url(''); ?>">Track GH Requests + Match</a></li> 
        <li <?php if ($currentPage == site_url('')) {echo 'id="here"';} ?>><a href="<?php echo site_url(''); ?>">Block/Manage Users</a></li>
        <li <?php if ($currentPage == site_url('')) {echo 'id="here"';} ?>><a href="<?php echo site_url(''); ?>">Track Support Requests</a></li> 
        <li <?php if ($currentPage == site_url('site/set_percent_page') || $currentPage == site_url('site/set_percent')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/set_percent_page'); ?>">Set Percentage</a></li> 
        <li <?php if ($currentPage == site_url('site/reset_pass_page') || $currentPage == site_url('site/reset_pass')) {echo 'id="here"';} ?>><a href="<?php echo site_url('site/reset_pass_page'); ?>">Change Password</a></li>
              
</ul>