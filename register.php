<?php session_start(); 

$name=$_GET["user"];
$pa=$_GET["pass"];
$mail=$_GET["email"];
srand(mktime());
$uid= rand();
$flag=0;
mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql="insert into users values('$name','$pa','$mail','$uid','$flag')";
if(mysql_query($sql))
{
  //  echo'hiii';
    echo"<script>alert('Successfully Registered')</script>";
   // Header("Location:login.html");
    $_SESSION['mname']=$name;
    $_SESSION['memail']=$mail;
    $_SESSION['muid']=$uid;
    @require 'curl.php';
}
else
{
    //echo mysql_error();
    echo"<script>alert('Could not be registered USER NAME may not be available or the Email may be already registered')</script>";
    @require 'register.html';
}

?>
