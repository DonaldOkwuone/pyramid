<?php $this->load->view('includes/header'); ?>
	
<body class="home">

<ul class="navigation dash">
 
<?php $this->load->view('includes/offcanvas'); ?>
                                     

</ul>
 
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
 
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
                  <div class="large-7 columns l recent">
                      <ul id="go">
                   <?php foreach($posts as $post): ?>
                          <li class='post'>
                              <h4><?php echo $post->title ?></h4>
                          <br />
                          
                              <?php echo $post->post ?>
                          <br /><br />
                           
                              <?php echo $post->bname." - ".$post->location; ?>
							  
							  <br />
							  <?php echo @$post->fb_url ?>
							  
							  <br />
							  <?php echo @$post->twitter_url ?>
                          
                          </li>
                         
                   <?php endforeach; ?>
                      </ul>
                      
                  </div>
                  <div class="large-5 columns r cates">
                    
                      
                      <ul>
                          <li><?php $this->load->view('includes/offcanvas'); ?></li>
                    
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
      
      
<?php $this->load->view('includes/footer'); ?>

</div>		
    




