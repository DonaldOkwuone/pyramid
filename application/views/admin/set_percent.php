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
                      <?php $this->load->view('includes/admin_menu'); ?>
                  </div>
                 
                  <div class="large-9 columns r workarea">
                      
         <?php echo "<span class='msg'>",@$msg,"</span>"; ?>  
         <form action="<?php echo site_url('site/set_percent') ?>" method="post" class="form">
             
             <ul class="large-5 columns">
		 						          
                 <li><input type="text" name="percent" value="<?php echo $this->input->post('percent') ?>" placeholder="<?php echo @$percent ?>" required="required" /></li>
                 
                 <li><button type="submit" id="submit" name="submit" />Set Percentage</button></li>
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
