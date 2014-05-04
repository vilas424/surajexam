 <?php session_start();

$_SESSION['logmethod']=3;


if(isset($_SESSION['username']))
    @require 'allc.php';
else
    @require 'login.html';

?>
