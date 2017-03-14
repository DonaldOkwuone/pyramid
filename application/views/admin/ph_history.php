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
                      
        
         <form action="<?php echo site_url('') ?>" method="post" class="form">
             <table class="responsive">
                 <tbody>
                     <tr><th>Amount Pledged</th><th>Amount Capitalised</th><th>Date</th><th>Matched</th><th>Status</th><th>Timestamp</th><th>POP</th></tr>
                     
                         <?php if( !empty($donations) ) { foreach($donations as $donation) : ?>
                     <tr><td><?php echo $donation->amount ?></td><td><?php echo $donation->cap ?></td><td><?php echo $donation->date ?></td><td><?php echo $donation->matched ?></td><td><?php echo $donation->status ?></td>
                         <td><?php echo $donation->time ?></td><td><?php echo $donation->pop ?></td>
                         <td><a href='match_ph_page/<?php echo $donation->id?>'>Match User</a></td>
                     </tr>
                         <?php endforeach; }?>
                 </tbody>
             </table>
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
