<?php session_start();

$_SESSION['logmethod']=4;


if(isset($_SESSION['username']))
    @require 'allcpp.php';
else
    @require 'login.html';

?>
