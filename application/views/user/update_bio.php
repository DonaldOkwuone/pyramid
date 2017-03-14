<?php $this->load->view('includes/header'); ?>

  <body>
 
<div class="site-wrap">
    <!-- main content -->
   <?php $this->load->view('includes/nav'); ?>
    
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
                 
                  <div class="large-9 r columns workarea">
   <?php echo "<span class='msg'>",@$msg,"</span>"; ?>  
   <form action="<?php echo site_url('site/insert_bio') ?>" method="post" class="form"> 

              <ul class="bio">
                  
		  <li><input type="text" name="accname" value="<?php echo $this->input->post('accname') ?>" placeholder="Bank Account Name" required="required" /></li>

                  <li><input type="text" name="accno" value="<?php echo $this->input->post('accno') ?>" placeholder="Bank Account No" required="required" /></li>
                  
                  <li><input type="text" name="bank" value="<?php echo $this->input->post('bank') ?>" placeholder="Bank Name" required="required" /></li>
                                   
                  <li><input type="text" name="phone" value="<?php echo $this->input->post('phone') ?>" placeholder="Phone number" required="required" /></li>
                      
                  <li><button type="submit" id="submit" name="submit" />Update Bio</button></li>
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
