<!doctype html>
<html>

    <?php include 'head.php';
    
    echo "<title>Update Records | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/BasicStyle.css' type='text/css'>
    <link rel='stylesheet' href='css/edit.css' type='text/css'>";?>
<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         
<div id="navigation">     
<ul id="" >
        <li><a href="Home.php">Home</a></li>
        <li><a href="link">Services</a>  <ul>
               <li><a href="appointment page">Appointment</a></li>
               <li><a href="Chat window">Talk to Doctors</a></li>
          </ul>
       </li>
     
     <li><a href="http://www.healthycalculators.com/">Calculators</a> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="heart_rate.php" target=_blank>Target Heart Rate</a></li>
               <li><a href="fat.php" target=_blank>Body Fat Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>
               
               
          </ul>
       </li>
        <li><a href="dlogout.php">LogOut</a>
          <ul>
               <!--<li><a href="login.php">Member LogIn</a></li>
               <li><a href="dlogin.php">Doctor Login</a></li>-->
          </ul>      
        
        <li><a href="register.php">SignUp</a>
               
            <ul>
               <!-- <li><a href="register.php">Member SignUp</a></li>-->
            </ul>
        </li>
     
       
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
    <!--<div id="leftColumn"></div>
    
    <div id="centre"><!-- record page starts here -->  
        
	<?php
session_start();
$dname=$_SESSION['dname'];
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="SELECT * FROM doctor WHERE dname='$dname'";
$records=mysql_query($sql,$con);
 

while($row=mysql_fetch_array($records))
{
echo "
<form action='dupdate.php' method='post'>
 <div id='form_top'>
     <h3>Records</h3>
</div>	 
<div class='input-group'>Name:<input type=text name=dname value='".$row['dname']."'></div>
<div class='input-group'>Email:<input type=text name=email value='".$row['email']."'></div>
<div class='input-group'>Phone No:<input type=text name=dno value='".$row['dmobile']."'></div>
<div class='input-group'>Category:<input type=text name=category value='".$row['category']."'></div>
 
<div class='input-group'>City:<input type=text name=city value='".$row['city']."'></div>
<div class='input-group'>Locality:<input type=text name=locality value='".$row['locality']."'></div>
<div class='input-group'>Day:<input type=text name=day value='".$row['day']."'></div>
<div class='input-group'>Timings:<input type=text name=time value='".$row['time']."'></div>
<div class='input-group'><input type=hidden name=id value='".$row['did']."'></div>
<div class='input-group' style='margin-top:-10px;'><input type=submit ></div>
</form>";
}




?>

     
   
      </div>
	  <!--<div id="rightColumn"></div>
  </div>-->
  
    
    
  <?php include 'footer.php'; ?> 
 
 </div><!--Container Ends-->
</body>
</html>