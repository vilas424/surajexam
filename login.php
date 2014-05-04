<?php session_start();

$name=$_GET["user"];
$pa=$_GET["pass"];
mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql="SELECT * FROM users WHERE username='$name' and password='$pa'";
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
    
    if($cols['flag']==1)
    {
    
        if($_SESSION['logmethod']==0)
        {
            $_SESSION['username']=$name;
            header("location:mainpage1.php?username=$myusername");
        
        }
        else if($_SESSION['logmethod']==1)
        {
            $_SESSION['username']=$name;
        
         header("location:postquery.html?username=$myusername");
        }
        else if($_SESSION['logmethod']==2)
        {
            $_SESSION['username']=$name;
        
         header("location:allquestions.php?username=$myusername");
        }
        else if($_SESSION['logmethod']==3)
        {
            $_SESSION['username']=$name;
        
         header("location:allc.php?username=$myusername");
        }
        else if($_SESSION['logmethod']==4)
        {
            $_SESSION['username']=$name;
        
         header("location:allcpp.php?username=$myusername");
        }
        else if($_SESSION['logmethod']==5)
        {
            $_SESSION['username']=$name;
        
         header("location:alljava.php?username=$myusername");
        }
    
    }
    else
    {
         $_SESSION['username']=$name;
         @require "confirm.html";
    }
}
else {
echo '<form action="back.php" method="post" >';
echo "<div align='center'><font size='5' color='black'> Wrong Username or Password</div>";
echo "<div align='center' ><input type='submit' name='back' value='Back'></div>";
echo '</form>';
}

?>
