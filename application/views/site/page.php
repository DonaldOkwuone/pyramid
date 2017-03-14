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
                  <div class="large-8 columns l recent">
                      <p class="title">
                       
                       <?php echo urldecode($cate); ?>
                       
                      </p>
                      <form action="<?php echo site_url('site/cate')."/".$cate ?>" method="POST">
                          <table class="location">
                              <tr><td>
                      <select name='location' name='location' value='<?php echo $this->input->post('location'); ?>' class="select ent">

                      <option selected value=''>Enter a Location - <?php echo $this->input->post('location'); ?></option>
     
<?php foreach($locations as $location): ?> 
    <option><?php echo $location->location; ?></option>
<?php endforeach; ?>
              </select></td>
              <td>
                  <button type="submit" name="go">Go</button>
              </td>              
                              </tr></table>
                      </form>
                 
<?php if(isset($_POST['go'])){ ?>
                   <ul id="go">
                   <?php foreach($posts as $post): ?>
                          <li class='post'>
                              <h4><?php echo $post->title ?></h4>
                          <br />
                          
                              <?php echo $post->post ?>
                          <br /><br />
                           
                              <?php echo @$post->bname." - ".$post->location; ?>
							  
							  <br />
							  <?php echo @$post->fb_url ?>
							  
							  <br />
							  <?php echo @$post->twitter_url ?>
                          
                          </li>
                         
                   <?php endforeach; ?>
                      </ul>
<?php } ?>
            
                  </div>
                  <div class="large-4 columns r cates">
                      <ul class="classes">
                     <?php $this->load->view('includes/offcanvas'); ?>
                      </ul>
                  </div>
              </div>
          </div>
      </div><!--mid-->
      
      <div class="container">
          <div class="row four ads_here">
           <p>Paid ads</p>
        
        </div><!-- wrap for for columns -->
      </div>
          
       
      <div class="lspace">
          <div class="container">
              <div class="row lspace">
                  <div class="large-12 columns"></div>
              </div>
          </div>
      </div><!--lspace-->
      
      
<?php $this->load->view('includes/footer'); ?>

</div>