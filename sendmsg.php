
  
<!doctype html>
<html>
    <?php include 'head.php';
    
    
    echo "<title>Get Appointment | SMART HEALTH Advisor</title>
  <link rel='stylesheet' href='css/searchdoctor.css' type='text/css'>
  <link rel='stylesheet' href='css/sendmsg.css' type='text/css'>
"; ?><body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
         <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
        
<div id="navigation">     
<ul id="" >
        <li><a href="Home.php">Home</a></li>
        <li><a href="link">Services</a>  <ul>
               <li><a href="medicine.php">Search Medicines</a></li>
          </ul>
       </li>
     
     <li><a href="http://www.healthycalculators.com/">Calculators</a> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/childrens-height-predictor.php" target=_blank>Child Height Predictor </a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>
          </ul>
       </li>
        <li><a href="logOut.php">LogOut</a>              
 </ul>   
 </div>  
 </div> 
    
<!--====== header ends here====-->
<div id="middle">
         
        
<div id="form1">
  <p><b>First search for the doctor to know the Doctor's ID, then send your message</b></p>
<h1>Search Doctor</h1><br>
<form method="post" action="">
Category:
<select name="category" required>
<?php
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT DISTINCT category FROM doctor");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row['category'];?></option>
<?php
}
?>	
    </select><br><br>
<button type='submit' name='check'>Check</button><br>
    </form>
    </div>
    <?php 
	session_start();
$var=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");

echo "<div id='head' style='margin-top:450px;'>
		   <div id='did'>Doctor Id</div>
		   <div id='dname'>Name</div>
		   <div id='locality'>Locality</div>
		   <div id='pno'>Phone<br>No.</div>
		   <div id='area'>Specalist</div>
		   <div id='day'>Days</div>
		   <div id='time'>Time</div>
           <div id='msg'>Send<br> Message</div>
		   </div>
";
if(isset($_POST['check']))
{
	
$var=$_SESSION['username'];

		$searchterm=mysql_real_escape_string(trim($_POST['category']));
	
$find=mysql_query("SELECT * FROM doctor WHERE category LIKE'$searchterm' ");

    
    while($row=mysql_fetch_assoc($find))
{
	$diseases=$row['did'];
	$name1=$row['dname'];
	$name2=$row['locality'];
	$name3=$row['dmobile'];
	$name4=$row['category'];
	$name5=$row['day'];
	$name6=$row['time'];
	//$name7=$row['Rating'];
	
		echo "
		   <div id='head'  >
		   <div id='did'>$diseases</div>
		   <div id='dname'><textarea>$name1</textarea></div>
		   <div id='locality'><textarea>$name2</textarea></div>
		   <div id='pno'>$name3</div>
		   <div id='area'><textarea>$name4</textarea></div>
		   <div id='day'>$name5</div>
		   <div id='time'>$name6</div>
           <div id='msg'><a href=chat1.php?did=".$row['did'].">Send</div>
		  
		   </div>";

}
}

   ?>
	   
  </div>
  
    <!--================ Middle ends here===============-->
    
    
<?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>


 








 
