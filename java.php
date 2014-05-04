<?php session_start();

$_SESSION['logmethod']=5;


if(isset($_SESSION['username']))
    @require 'alljava.php';
else
    @require 'login.html';

?>
