<?php $this->load->view('includes/header'); ?>

    <body class="home">

 <!--<ul class="navigation dash">


</ul>
 
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>-->
 
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
      
      <div class="mid note">
          <div class="container mid">
              <div class="row main">
                  <div class="large-7 columns l">
                      <p style="font-size: 2.0em;color: #fff;position: relative;top:145px;margin-bottom: 85px">
                          <b>Join<br />A community of givers.<br /> Provide Help. Get Help. </b> <br />
                      </p>
                  </div>
                  <div class="large-5 columns r sign">
                      <h3>Sign Up</h3>
            <form action="<?php echo site_url('site/signup_page') ?>" method="post" class='form signup'>
  <?php if(isset($_POST['submit']) && $result) { echo "<p class='msg'>",$msg,"</p>","\n";} 
        elseif(isset($_POST['submit']) && !$result){ echo "<p class='err'>","Username already exists!","</p>","\n"; }  
  ?>
 
<ul>
    
    <li><input type='text' name='username' placeholder="Username*" required="required" /></li>

    <li><input type='text' name='email' placeholder="E-mail*" required="required" /></li>

 

<li><button type='submit' id='submit' name='submit' />Sign Up</button></li>
</ul>
</form>
                      <p class='small' style="position: relative;left:-8px;">Have an account already? <a href='<?php echo site_url('site/signin_page'); ?>'>Sign In</a></p>
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