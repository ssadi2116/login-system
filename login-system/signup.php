<?php
$first=$_REQUEST["Name"];
$last=$_REQUEST["LastName"];
$username=$_REQUEST["username"];
$age=$_REQUEST["age"];
$gender=$_REQUEST["radiobutton"];
//$passwordVAl=$_REQUEST["password"];



// Create connection
$conn = new mysqli("localhost","root","", "exp");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
     $escapedPW = mysqli_real_escape_string($conn,$_REQUEST['password']);

# generate a random salt to use for this account
$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$saltedPW =  $escapedPW . $salt;
///sha256 is a hashing algorithm
$hashedPW = hash('sha256', $saltedPW); 
    
    $sql="insert into user(first,last,age,username,password,salt,gender,createdate) 
 value('$first','$last','$age','$username','$hashedPW','$salt','$gender',NOW())";
    $result=$conn->query($sql);
    if($result==true)
	{echo "user inserted successfully";
		header("Location: index.html");}
    else
        echo "user insertion error";
    
}

?>