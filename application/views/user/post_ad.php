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
                  <div class="large-5 columns l">
                      <?php $this->load->view('includes/user_account'); ?>
                      <?php $this->load->view('includes/user_menu'); ?>
                  </div>
                 
                  <div class="large-7 columns r workarea">
  <?php echo "<span class='msg'>",@$msg,"</span>"; ?> 
   <form action="<?php echo site_url('site/post_ad') ?>" method="post" class="form"> 

              <ul class="bio ad">
              <li>
              <select name='cate' value='' class="select ent" required="required">

         <option selected value=''>Post Under</option>>
    <?php foreach ($cates as $cate) : ?>

    <option><?php echo $cate->category; ?></option>
    
<?php endforeach; ?>
              </select>
                  </li>							
              
                  
              <li>
                  <select name='location' name='location' value='' class="select ent" required="required">

                  <option selected value=''>Location</option>>
    <?php foreach ($locations as $location) : ?>

    <option><?php echo $location->location; ?></option>
<?php endforeach; ?>
              </select>
                  </li>
           
                  <li><input type='text' name="title" placeholder="Title or Subject of post" required="required" /></li>
                  
                  <li><p>Write a description or sales pitch</p></li>
                  <li>
                      <textarea name="pitch" required="required"></textarea>
                   
                  </li>
                
                 
                 <li><button type="submit" id="submit" name="submit" />Post ad</button></li>
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
