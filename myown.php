<html>
    <head>
        <title>Question</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <link rel="stylesheet" href="style.css">
                      <style>
		* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
          box-sizing: border-box;
}
 
 
.pic {
  border: 5px solid #fff;  
  float: left;
  height: 300px;
  width: 300px;
  margin: 5px;
  overflow: hidden;
   
  -webkit-box-shadow: 10px 10px 10px #f778a1;
          box-shadow: 10px 10px 10px #f778a1;  
}
.pic1 {
  border: 5px solid #fff;  
  float: left;
  height: 300px;
  width: 300px;
  margin: 5px;
  overflow: hidden;  
}

.morph {
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.morph:hover{
	border:70px solid #f778a1;
	border-radius:50%;
	}
        h2{
            color: purple;
        }
</style>
<style>
    div{
        color: purple;
    }
</style>
    </head>
    <body>
       <div class="container">
    <section class="register">
          <center><h2>Selected Question.....</h2></center>
         <a href="mainpage1.php">HOME</a>
         <br><br>
        <table border="1" cellspacing="10" cellpadding="10">
            
            <th>Question</th>
            <th>Author</th>
             <th>Date</th>
            <th>Time</th>
        <?php
       
        $qid=$_GET["qid"];
        session_start();
        $_SESSION['qid']=$qid;
        
        mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql="select question,datee,timee,username from questions where qid =$qid";
$res=  mysql_query($sql);

while($row=mysql_fetch_array($res))
{


echo "<tr>";
echo"<td>".$row['question']."</td><td>".$row['username']."</td><td>".$row['datee']."</td><td>".$row['timee']."</td>";
echo "</tr>";
}
        ?>
        
         </table>
         
    </section>
       </div>
          <div class="container">
    <section class="register">
        <center><h2>Answers So Far.....</h2></center>
         <a href="mainpage1.php">HOME</a>
         <br><br>
        
        <?php
       // $qid=$_GET["qid"];
        mysql_connect("localhost", "","") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql1="select answer,datee,timee,author from answers where qid =$qid";
//$ress1=  mysql_query($sql1);
$res1=mysql_query($sql1);
$no=  mysql_num_rows($res1);
if($no!=0){
    echo "<table border='1' cellspacing='10' cellpadding='10'>";
            
            echo "<th>Answer</th>
            <th>Author</th>
             <th>Date</th>
            <th>Time</th> ";
while($row1=mysql_fetch_array($res1))
{


echo "<tr>";
echo"<td>".$row1['answer']."</td><td>".$row1['author']."</td><td>".$row1['datee']."</td><td>".$row1['timee']."</td>";
echo "</tr>";
}
       echo  "</table>";

}
else if($no==0)
{
    echo "Be the First to answer";
}
        ?>
        
         
    
        
           <form action="insertanswer.php" method="get">
       
        <center><h2>Post your answer..</h2>
        <div class="head_wrapper">
            <textarea  name="answer" ></textarea>
        </div>
       
        <button name="postans" class="buttonscrolly">Post Answer</button>
        
       </center>
        
        
    
        </form>
        
       </section>
       </div>
    </body>
</html>