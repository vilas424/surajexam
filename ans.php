<?php session_start();

$_SESSION['logmethod']=2;


if(isset($_SESSION['username']))
    @require 'allquestions.php';
else
    @require 'login.html';

?>
