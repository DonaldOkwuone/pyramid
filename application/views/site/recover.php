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
                  <div class="large-7 columns l">
                
                  </div>
                  <div class="large-5 columns r">
                      <h3>Forgot Password?</h3>
                  
                          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form signup">
            
                            <ul>
                                <li></li><br />
                                      <?php
                                     if(isset($_POST['recover']))
                                          { 
                                         $email = $_POST['email'];
                                         $usr = $_POST['user'];
                                         $sql ="select `username`,`email` from `users` where `email` = '$email' AND `username` = '$usr'";
                                         $result = mysql_query($sql);
                                         if(mysql_num_rows($result) > 0){
                                             $row = mysql_fetch_array($result);
                                             $trueemail = $row['email'];
                                             $user = $row['username'];
                                             $pass = time();
                                             
                                             //operation- insert recovery code and send email
                                            $insql = "update `users` set `reccode` = '$pass' where `username` = '$user'"; 
                                            $inresult = mysql_query($insql);
                                            if($inresult){
                                               $msg = 'Recovery Code sent. See your email box'; 
                                            }
                                             
        //send mail
	$to = $trueemail;
	$subject = "Password Revovery";
        $from = "parole_robot@weddingparole.com";
	
	
$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
$message = "<html><body>";
$message .= "<h2>Password Recovery</h2>";
$message .= "<table rules='all' cellpadding='8'>";

$message .= "<tr><td><b>Recovery Code:</b></td><td>" .$pass ."</td></tr>";

$message .= "<tr><td>Please enter the recovery code given at the link below to continue with your password recovery process</td></tr>";
$message .= "<tr><td>http://weddingparole.com/recover_pass.php</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

	
	$ok = @mail( $to, $subject, $message, $headers ); 
                  }         
                                     }
                                    ?>
                               <li> <?php
                                     if(@$inresult && @$ok){
                                      
            $msg = "Recovery Initiated! See your e-mail box.";
            echo $msg;
        }
                                         elseif(isset($_POST['recover']) && !$inresult){
                                        
                                        echo "Not a registered user!";;
                                       }  ?>
                               </li>
                               
                               <li><input type='text' name='user' placeholder="Enter your Username *" required="required" /></li>
                              
                               <li><input type='text' name='email' placeholder="Enter your E-mail address *" required="required" /></li>
                              
                    
<li><button type='submit' id='submit' name='recover' />Recover</button></li>
                              
                                
                            </ul>
                        </form>
<p class='small'>Have an account already? <a href='<?php echo site_url('site/signin_page'); ?>'>Sign In</a></p>
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