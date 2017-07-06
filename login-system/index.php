
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
    
	
	<style>
html{
	background:#f0f0f0;
	padding:20px;
}

body {
	width: 250px;
	margin: 0 auto;
}

.push_button {
	position: relative;
	width:220px;
	height:40px;
	text-align:center;
	color:#FFF;
	text-decoration:none;
	line-height:43px;
	font-family:'Oswald', Helvetica;
	display: block;
	margin: 30px;
}
.push_button:before {
	background:#f0f0f0;
	background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));
	
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	
	-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
	-moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
	box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
	
	position: absolute;
	content: "";
	left: -6px; right: -6px;
	top: -6px; bottom: -10px;
	z-index: -1;
}

.push_button:active {
	-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
	top:5px;
}
.push_button:active:before{
	top: -11px;
	bottom: -5px;
	content: "";
}

.red {
	text-shadow:-1px -1px 0 #A84155;
	background: #D25068;
	border:1px solid #D25068;
	
	background-image:-webkit-linear-gradient(top, #F66C7B, #D25068);
	background-image:-moz-linear-gradient(top, #F66C7B, #D25068);
	background-image:-ms-linear-gradient(top, #F66C7B, #D25068);
	background-image:-o-linear-gradient(top, #F66C7B, #D25068);
	background-image:linear-gradient(to bottom, #F66C7B, #D25068);
	
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	
	-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
	-moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
	box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
}

.red:hover {
	background: #F66C7B;
	background-image:-webkit-linear-gradient(top, #D25068, #F66C7B);
	background-image:-moz-linear-gradient(top, #D25068, #F66C7B);
	background-image:-ms-linear-gradient(top, #D25068, #F66C7B);
	background-image:-o-linear-gradient(top, #D25068, #F66C7B);
	background-image:linear-gradient(top, #D25068, #F66C7B);
}

.blue {
	text-shadow:-1px -1px 0 #2C7982;
	background: #3EACBA;
	border:1px solid #379AA4;
	background-image:-webkit-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-moz-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-ms-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:-o-linear-gradient(top, #48C6D4, #3EACBA);
	background-image:linear-gradient(top, #48C6D4, #3EACBA);
	
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	
	-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
	-moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
	box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #338A94, 0 4px 2px rgba(0, 0, 0, .5);
}

.blue:hover {
	background: #48C6D4;
	background-image:-webkit-linear-gradient(top, #3EACBA, #48C6D4);
	background-image:-moz-linear-gradient(top, #3EACBA, #48C6D4);
	background-image:-ms-linear-gradient(top, #3EACBA, #48C6D4);
	background-image:-o-linear-gradient(top, #3EACBA, #48C6D4);
	background-image:linear-gradient(top, #3EACBA, #48C6D4);
}
</style>

   
    
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
							 <br><p>LAST LOGIN ON :<br>
							 <i><?php 
							 $ses_sql_lg=mysql_query("select lastlog from user where username='$user_check'", $connection);
							$row2= mysql_fetch_assoc($ses_sql_lg);
							
							echo $row2['lastlog'];
							
							
					mysql_query("UPDATE user SET lastlog = now() WHERE username=  '" .mysql_real_escape_string($_SESSION['login_user']). "'");

					?></i>
					
					</h1>
	
               <br>
			   
			   
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
		
		<a class="push_button red" href="logout.php">LOGOUT</a> 
       

  </body>
</html>