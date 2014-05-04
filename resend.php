<?php session_start();

$mname = $_SESSION['username'];

mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql="SELECT * FROM users WHERE username='$mname'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>=1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("name");
//session_register("pa");
#session_register("mysubcode");
#header("location:retrieve_teacher.php?username=$myusername");
 
    $cols=mysql_fetch_array($result);
    
    $memail=$cols['email'];
    $muid=$cols['uid'];
    
    $_SESSION['mname']=$mname;
    $_SESSION['memail']=$memail;
    $_SESSION['muid']=$muid;
    
    @require 'curl.php';
}

?>