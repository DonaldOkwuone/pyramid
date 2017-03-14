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
                      
                      <ul class="track" style="color: snow;">
                 <?php foreach($details as $detail) : ?>
                 <li style="font-size:1.3em;color:#333;"><b>Your Match</b></li>
                 <li class="no"><b>Account Name</b></li>
                 <li><?php echo $detail->accname ?></li>
                 <li class="no"><b>Account No.</b></li>
                 <li><?php echo $detail->accno ?></li>
                 <li class="no"><b>Bank</b></li>
                 <li><?php echo $detail->bank ?></li>
                 <li class="no"><b>Phone No</b></li>
                 <li><?php echo $detail->phone ?></li>
                 <?php endforeach; ?>
                 <?php foreach($amts as $amt) : ?>
                 <li class="no"><b>Amount to provide(N)</b></li>
                 <li><?php echo $amt->amount ?></li>
                 <?php endforeach; ?>
                
              
                 
             </ul>               
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
