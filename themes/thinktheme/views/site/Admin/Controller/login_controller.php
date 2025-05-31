<?php 
   include("../Model/dbconfig.php");
   mysql_set_charset("utf8");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $myusername=$_POST['username'];
      $mypassword=$_POST['password'];

  
      $sql="SELECT * FROM think_master WHERE user_n='$myusername' and user_p='$mypassword'";     
      $result=mysql_query($sql, $conn);
      
      $count=mysql_num_rows($result);
		
      if($count==1)
      {
         //session_register("myusername");
         $_SESSION['login_user']=$myusername;
         
         header("location: /Admin/home");
      }
      else 
      {
         //$error="Your Login Name or Password is invalid";
         //echo "<br><div class=\"login-error\">Your Login Name or Password is invalidg</div>";

         ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js "></script>
<script type="text/javascript">
  $(document).on('ready', function(){
    $modal = $('.modal-frame');
    $overlay = $('.modal-overlay');

    /* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
    $modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
      if($modal.hasClass('state-leave')) {
        $modal.removeClass('state-leave');
      }
    });

    $('.close').on('click', function(){
      $overlay.removeClass('state-show');
      $modal.removeClass('state-appear').addClass('state-leave');
    });

    
      $overlay.addClass('state-show');
      $modal.removeClass('state-leave').addClass('state-appear');
   

  });
</script>


         <?php
      }

   



   }
   
?>