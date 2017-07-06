<?php
$username=$_REQUEST["username"];
//$passwordVAl=$_REQUEST["password"];


// Create connection
$conn = new mysqli("localhost","root", "", "exp");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{

     $escapedPW = mysqli_real_escape_string($conn,$_REQUEST['password']);

 
     
//now check user and pass verification
 $query = "select * from user where username = '$username';";
 
     $resultSet = mysqli_query($conn,$query);

                           if(@mysqli_num_rows($resultSet) > 0){
                           //check noraml user salt and pass
                           //echo "noraml";
                            
 $saltQuery = "select salt from user where username = '$username';";
$result = mysqli_query($conn,$saltQuery);
$row = mysqli_fetch_assoc($result);
$salt = $row['salt'];

$saltedPW =  $escapedPW . $salt;

$hashedPW = hash('sha256', $saltedPW);

 $query = "select * from user where username = '$username' 
and password = '$hashedPW' ";
                        
                            $resultSet = mysqli_query($conn,$query);

                           if(@mysqli_num_rows($resultSet) > 0){
                               $row = mysqli_fetch_assoc($resultSet);
                               echo "your username and  password is correct";
							   
                               session_start();
                               $_SESSION['login_user']=$username; // Initializing Session
							   $time = $row['lastlog'];
								$act_time = date('d-m-Y H:i:s' , $time );
								$_SESSION['last_log']=$act_time;
							   
							  
header("location:home.php");
}
else
{
echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='login.html'";
echo "</script>";
}

mysql_close($conn); // Closing Connection

}
     
}
?>