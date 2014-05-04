<?php session_start();

$answer=$_GET["answer"];

mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$date=  date("d/m/Y");
$time=  time();
$name=$_SESSION['username'];
$qid=$_SESSION['qid'];
$sql="insert into answers values(null,$qid,'$answer','$name','$date','$time')";
if(mysql_query($sql))
{
     echo"<script>alert('Successfully Posted answer')</script>";
     @require 'mainpage1.php';
}
?>
