<?php $this->load->view('includes/header'); ?>

  <body>
 
<div class="site-wrap">
    <!-- main content -->
    
       <div class="space">
          <div class="container">
              <div class="row space">
                  <div class="large-12 columns"></div>
              </div>
          </div>
      </div><!--space-->
      
      <div class="mid">
          <div class="container mid">
              <div class="row main">
                  <div class="large-3 columns l">
                      <?php $this->load->view('includes/user_account'); ?>
                      <?php $this->load->view('includes/user_menu'); ?>
                  </div>
                 
                  <div class="large-9 columns r workarea">
                      
         <?php echo "<span class='msg'>",@$msg,"</span>"; ?>  
         <form action="<?php echo site_url('site/reset_pass') ?>" method="post" class="form">
              <ul class="large-5 columns">
							
                  <li><input type="password" name="psw" id="pword" placeholder="Enter password" required="required" /></li>
	          
                  <li><input type="password" name="psw2" placeholder="Re-enter password" required="required" /></li>
             
                 <li><button type="submit" id="submit" name="submit" />Change Password</button></li>
              </ul>
          </form>                  
                  </div>
                  </div>
              </div>
         
      </div><!--mid-->
          
       
      <div class="lspace">
          <div class="container">
              <div class="row lspace">
                  <div class="large-12 columns"></div>
              </div>
          </div>
      </div><!--lspace-->
      
      
<?php //include('../includes/footer_2.inc.php'); ?>

</div>
