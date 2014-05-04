<?php session_start();

$_SESSION['logmethod']=1;


if(isset($_SESSION['username']))
    @require 'postquery.html';
else
    @require 'login.html';

?>
