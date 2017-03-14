      <div class="footer">
          <div class="container">
              <div class="row footer">
                  <div class="large-7 columns">
                    
                  </div>
                  <div class="large-5 columns debug">
                      <p><a href="<?php echo site_url('site/signin_page'); ?>">Sign In</a> | New User? <a href='<?php echo site_url('site/signup_page'); ?>'>Sign Up!</a></p>
                  </div>
              </div>
          </div>
      </div><!--footer-->
      
  <!--load some js in the footer -->    
  <script>
    $(document).foundation();
  </script>
  
  <script type="text/javascript">
  $(document).ready(function() {

  $('.columns.l.recent ul li:odd'). css('background-color','#f8fafb') ;
  $('.columns.l.recent ul li:even'). css('background-color','snow') ;
  
  });

</script>

<script type='text/javascript'>
$(document).ready(function() {
$('.columns.l.recent ul#go').pagination();

 });
</script>

<script>
$(function() {
    
 $("ul.dash li a").addClass("here");
    });
    
});
</script>
</body>
</html>