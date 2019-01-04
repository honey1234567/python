<!doctype html>
<html>
<?php include 'head.php';
    echo "<title>Basic Layout | SMART HEALTH ADVISOR</title>
     <link rel='stylesheet' href='css/BasicLayout.css' type='text/css'>
     <style>
      #head
      {heigth:30px;border:1px lack;}
      
      #uname
      {
        width:20%;float:left;
        border:1px dashed black;
      }
      
      #msg
      {
        margin-leftf:500px;
        border:1px dashed blue;

}
      </style>
     ";
    ?>
<body>

<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
          
<div id="navigation">     
<ul id="" >
       <li><a href="Home.php">Home</a></li>
       <li><p>Services</p><ul>
               <li><a href="project3.html">Search Emergency Services</a></li>
               <li><a href="medicine.php">Search Medicines</a></li>
          </ul>
       </li>
     
     <li><p>Calculators</p> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="heart_rate.php">Target Heart Rate</a></li>
               <li><a href="fat.php">Body Fat Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>
               
               
          </ul>
       </li>
    <li><p>LogIn</p>
          <ul>
               <li><a href="login.php">Member LogIn</a></li>
               <li><a href="dlogin.php">Doctor Login</a></li>
          </ul>      
        
        <li><p>SignUp</p>
               
            <ul>
                <li><a href="register.php">Member SignUp</a></li>
                <li><a href="dregister.php">Doctor SignUp</a></li>
            </ul>
        </li>
         <li><a href="viewfeedback.php">Feedback</a></li>
       
 </ul>   
    </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
       
      <!--   <div id="leftColumn">
               leftColumn
         </div>-->
          
       
         <div id="centre" style="width:99%;">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql=mysql_query("SELECT * FROM chat WHERE did ='$_GET[did]'");
echo "<table cellspacing='50' cellpading='400' width='700'>
           
		   <tr>
		   
		   <div id='uname'>Patient</u></div>
		   <div id='msg'>Message</u></div>
		    <td><a href='Reply.php'>Reply</a></div> 
            </div>";
while($row=mysql_fetch_assoc($sql))
{
	

	$name5=$row['uname'];
	$name6=$row['msg'];
	echo "<div id='head'>	   
		   
		   <div id='uname'>$name5</div>
		   <div id='msg'>$name6</div>
		  
		   </div>
			";
			
	
	
	
}


?>
         </div>
  <!--<div id="rightColumn"></div>-->
  </div>
    
    
  <?php include 'footer.php'; ?> 
 
</div><!--Container Ends-->
</body>
</html>

