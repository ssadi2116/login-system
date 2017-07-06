
<?php
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SAI ADITYA SANDUPATLA</title>
    
 
   <!--styles-->
    <link href="style.css" rel="stylesheet">
    
	
	

   
    
    <!--fonts -->
	<link href="http://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
    
  </head>
  
  
  
  
  
  
    <body background="hero1.jpg">
    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
		<a href="index.html"><img alt="logo" class="logo-nav" src="images/logo.png"  style="max-width:220px; height:120px; float: left;"></a>
       
        <!--/.LOGO END-->
	<body onload="digitized();">
    <div style="background-color:#F3F3F3;
        max-width:220px;width:100%;margin:0 auto;padding:20px;float: right;">

        <table class="tabBlock" align="centre" cellspacing="0" cellpadding="0" border="0">
            <tr><td class="clock" id="dc"></td>  <!-- THE DIGITAL CLOCK. -->
                <td>
                    <table cellpadding="0" cellspacing="0" border="0">
                    
                        <!-- HOUR IN 'AM' AND 'PM'. -->
                        <tr><td class="clocklg" id="dc_hour"></td></tr>

                        <!-- SHOWING SECONDS. -->
                        <tr><td class="clocklg" id="dc_second"></td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>




<script>
    // OUR FUNCTION WHICH IS EXECUTED ON LOAD OF THE PAGE.
    function digitized() {
        var dt = new Date();    // DATE() CONSTRUCTOR FOR CURRENT SYSTEM DATE AND TIME.
        var hrs = dt.getHours();
        var min = dt.getMinutes();
        var sec = dt.getSeconds();

        min = Ticking(min);
        sec = Ticking(sec);

        document.getElementById('dc').innerHTML = hrs + ":" + min;
        document.getElementById('dc_second').innerHTML = sec;

        if (hrs > 12) { 
            document.getElementById('dc_hour').innerHTML = 'PM'; 
        }
        else { 
            document.getElementById('dc_hour').innerHTML = 'AM'; 
        }

        // CALL THE FUNCTION EVERY 1 SECOND (RECURSION).
        var time
        time = setInterval('digitized()', 1000);
    }

    function Ticking(ticVal) {
        if (ticVal < 10) {
            ticVal = "0" + ticVal;
        }
        return ticVal;
    }
</script>




      </div>
      <div class="menu-wrap">
        <nav class="menu">
          
        </nav>
       
      </div>
      <!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
      
	  
	  
	  
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>Hello &nbsp &nbsp
					
					<i><?php echo $login_session;?></i>
							 <br><p>LAST LOGIN ON :</p>
							 <i><?php 
							 $ses_sql_lg=mysql_query("select lastlog from user where username='$user_check'", $connection);
							$row2= mysql_fetch_assoc($ses_sql_lg);
							
							echo $row2['lastlog'];
							
							
					mysql_query("UPDATE user SET lastlog = now() WHERE username=  '" .mysql_real_escape_string($_SESSION['login_user']). "'");

					?></i>
					
					<br><p>DATE OF REGISTRATION :</p>
							 <i><?php 
							 $ses_sql_cg=mysql_query("select createdate from user where username='$user_check'", $connection);
							$row3= mysql_fetch_assoc($ses_sql_cg);
							
							echo $row3['createdate'];
							
							
					

					?></i>
					
					</h1>
	
               <br>
			   
			   <a class="push_button red" href="logout.php" style="align:center;">LOGOUT</a> 
                    <span class="typed"></span>
                  </div>
              </div>
              
            </div>
          </div>
        </section>
		
		
       

  </body>
</html>