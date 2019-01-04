 


<!doctype html>
<html>

    <?php include 'head.php';
    
    echo "<title>CHAT SYSTEM | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/BasicStyle.css' type='text/css'>
    <link rel='stylesheet' href='css/chat_style.css' type='text/css'>";?>
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
     
         <li><a href="viewfeedback.php">Feedback</a></li>
       
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
      
  <div id="middle">
      
     <!-- <div id="leftColumn">
          </div>-->
      
   
         <!--<div id="rightColumn"></div>-->
         <div id="centre"> <?php include 'db.php'; ?>
 

<script>
  function send_msg()
  {
	var req = new XMLHttpRequest();
    req.onreadystatechange = function ()
	{
		if(req.readyState == 4 && req.status == 200)
		{
			document.getElementById('chat').innerHTML = req.responseText;
		}
	}
  req.open('GET','chat2.php',true);
  req.send();
  }
  setInterval(function(){send_msg()},1000);
</script>







<div id="chat_container" onload="send_msg();">
<div id="chat_box">
     <div id="chat"></div>
    </div>
  <form action=" " method="post" style=" ">
      <!--<input type="text" name="name" placeholder="Name"> -->
      <textarea name="msg" placeholder="Message"></textarea>
      <input type="submit" name="submit" value="Send">
    </form>
    
  
	
	<?php 
//	include 'db.php';
	session_start();
   //$_SESSION['username'];
	if(isset($_POST['submit']) && isset($_GET['did']))
	{
		$_SESSION['id']=$_GET['did'];
        $var=$_SESSION['username'];
		$msg = $_POST['msg'];
		
		$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="INSERT INTO chat(uname,did,msg)VALUES('$var','$_GET[did]','$msg')";
		
mysql_query($sql,$con);
	}
	
   ?>
  </div> 
 
		 
		 </div>
  </div>
    
    
  <?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>


