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
             <form action="<?php echo site_url('site/match_ph')."/".$this->uri->segment(3); ?>" method="post" class="form">
            
             <ul class="track">
                 <?php foreach($donations as $donation) : ?>
                 <li class="no"><b>User ID</b></li>
                 <li><?php echo $donation->username ?></li>
                 <li class="no"><b>Amount Pledged</b></li>
                 <li><?php echo $donation->amount ?></li>
                 <li class="no"><b>Amount Capitalised</b></li>
                 <li><?php echo $donation->cap ?></li>
                 <li class="no"><b>Timestamp</b></li>
                 <li><?php echo $donation->time ?></li>
                 <li class="no"><b>Enter no of target matches</b></li>
                 <li class="inline">
                 <input type="text" name="fields" value="<?php echo $this->input->post('fields'); ?>" class="ent" style="width:40%;" />
</li>
<?php
  if(isset($_POST['fields'])){
      ?>

<?php
for($i=1; $i<=@$_POST['fields']; $i++){ ?>

        
            <li><input type="text" name="amt_to[]" value="" placeholder="00" /></li>
            <li>
                <select name='payee[]' value='' class="" required="required" style="position:relative;top:-5px;">

    <option selected value='<?php echo $this->input->post('payee'); ?>'>Match to</option>
    <?php foreach ($payees as $payee) : ?>

    <option><?php echo $payee->username; ?></option>
    
<?php endforeach; ?>
         </select>
    </li>
        

  <?php  } ?>
<li class="no">
    <button type="submit" name="match">
        Match PH
    </button></li>  
<?php } ?>
            
                 
                 <?php endforeach; ?>
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
