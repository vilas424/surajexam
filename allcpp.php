<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Post query</title>
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
    </head>
    <body> <form action="Cprog.php" method="get">
        <div class="container">
    <section class="register">
        
         <a href="mainpage1.php">HOME</a>
         <br/> <br>
         <h2>Question Bank</h2>
        <table border="1" cellspacing="10" cellpadding="10">
            <th>Q ID</th>
            <th>Date</th>
            <th>Question</th>
             <th>Tag</th>
            <th>Author</th>
            <?php
            
            
            $t=time();
            mysql_connect("localhost", "root","root") or die("No connection");
mysql_select_db("test") or die ("DATABASE not availabel");
$sql="select * from questions where tag='c++' order by qid desc";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{


echo "<tr>";
echo"<td>".$row['qid']."</td><td>".$row['datee']."</td><td><a href='myown.php'>".$row['question']."</a></td><td>".$row['tag']."</td><td>".$row['username']."</td>";
echo "</tr>";
}
            ?>
            
           
        </table>
          Enter QID <input type="text" name="qid"/> 
          <button class="buttonscrolly">View</button>
    </section>
           </div>
    </section>
        </div>
</form>
    </body>
</html>
