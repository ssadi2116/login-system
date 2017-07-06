<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("exp", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from user where username='$user_check'", $connection);
$ses_sql_lg=mysql_query("select lastlog from user where username='$user_check'", $connection);
$ses_sql_cg=mysql_query("select createdate from user where username='$user_check'", $connection);

$row = mysql_fetch_assoc($ses_sql);
$row2= mysql_fetch_assoc($ses_sql_lg);
$row3= mysql_fetch_assoc($ses_sql_cg);

$login_session =$row['username'];



if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>