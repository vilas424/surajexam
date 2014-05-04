<?php session_start();

$question=$_GET["question"];
$tag=$_GET["tag"];
mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$date=  date("d/m/Y");
$time=  time();
$name=$_SESSION['username'];
$sql="insert into questions values(null,'$question','$name','$tag','$date','$time')";
if(mysql_query($sql))
{
     echo"<script>alert('Successfully inserted')</script>";
     @require 'mainpage1.php';
}
?>
