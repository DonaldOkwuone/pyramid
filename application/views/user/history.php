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
                      
        
         <form action="<?php echo site_url('') ?>" method="post" class="form">
             <table class="responsive">
                 <tbody>
                     <tr><th>PH Amount(N)</th><th> GH Amount(N)</th><th>Date</th><th>Matched</th><th>Status</th><th>POP</th></tr>
                     <?php foreach($donations as $donation) : ?>
                     <tr><td><?php echo $donation->amount ?></td><td><?php echo $donation->cap ?></td><td><?php echo $donation->date ?></td><td><?php echo $donation->matched ?></td><td><?php echo $donation->status ?></td>
                         <td><?php echo $donation->pop ?></td>
                         <td><a href='upload_ticket/<?php echo $donation->id?>'>Attach POP</a></td>
                         <?php if($donation->status == 'Paid'){ ?>
                         <td><a href='get_help/<?php echo $donation->id?>'>Get Help</a></td> 
                         <?php } ?>
                        <?php if($donation->matched == 'Matched'){ ?>
                         <td><a href='get_match/<?php echo $donation->id?>'>See Matching</a></td>
                        <?php } ?>
                     </tr>
                     <?php endforeach; ?>
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
