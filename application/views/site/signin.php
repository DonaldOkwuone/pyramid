<?php $this->load->view('includes/header'); ?>

  <body class="home">
 
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
                  <div class="large-7 columns l">
                    
                  </div>
                  <div class="large-5 columns r sign">
                      <h3>Sign In</h3>
                    <?php echo "<span class='err'>",@$error_msg_1,"</span>"; ?>
                    <?php echo "<span class='err'>",@$error_msg_2,"</span>"; ?>  
                      <form action="<?php echo site_url('site/signIn') ?>" method="post" class="form signin">
             
                            <ul>
                               
                                <li><input type='text' name='user' value="<?php echo @$_POST['user']; ?>" placeholder="User ID" required="required" /></li>
                               
                                <li><input type='password' name='pass' placeholder="Password" required="required" /></li>
                                
                                <li><button type='submit' id='submit' name='submit'>Sign In</button></li>
                                
                                <li><p class='forgot small' style="position: relative;left: -8px"><a href="<?php echo site_url('site/recover_page') ?>?forgot=action" target="_blank">Forgot your Password?</a></p></li>
                                   
                                
                                
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
      
      
<?php $this->load->view('includes/footer'); ?>

</div>