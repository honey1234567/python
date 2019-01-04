<?php 
session_start();
        $dname=$_SESSION['dname'];
// connect to database
$db = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['submit']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$comments = mysql_real_escape_string($_POST['comments']);
	
						//$comments =$_POST['comments'];
	// $query="SELECT * FROM users WHERE username='$username'";
	
        $sql = "INSERT INTO reply1(username,dname,msg) VALUES('$username','$dname','$comments')";
        mysqli_query($db, $sql);
		header("refresh:2;url=dprofile.php");
       
	 
}
   



?>


<!doctype html>
<html>
<head>
<title>Reply </title>
</head>

<body>
  <div class ="header">
  </div>


  <form method="post" action="reply.php">
 Pateint name:
<select name="username" required>
<?php
session_start();
        $dname=$_SESSION['dname'];
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT DISTINCT uname FROM chat WHERE did='$_GET[did]'");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row['uname'];?></option>
<?php
}
?>	
</select><br><br>
  	<!--<input type="text" name="username" class="textInput" placeholder="Username" required><br>-->
   
	Message:<textarea name="comments" row="15" cols="40"></textarea><br>
 

<input type="submit" name="submit" value="Send">


  </form>  

</body>


</html>