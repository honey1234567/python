 
<!doctype html>
<html>

<?php include 'head.php';
    echo "<title>Reset Password | SMART HEALTH Advisor</title>
  <link rel='stylesheet' href='css/password.css' type='text/css'>";   ?>

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
         
        
    <div id="centre">
              <form action="" method="post" enctype="multipart/form-data">
    <br>Upload file<input type="file" name="f"/><br>
    Name<input type="text" name="t"/>
    <br><input type="submit" name="submit1" value="submit" />
    </form>

    <?php
    session_start();
$var=$_SESSION['username'];
   // $aid=$_SESSION['aid'];
    $filename=$_POST['t'];
    $lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
    
  if(isset($_POST["submit1"]))  
  {
      $frm=$_FILES["f"]["name"];
      $dst="uploads/$frm";
      move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
    //  $query="INSERT INTO bookinghistory(filename,name,path) VALUES(' $filename',' $frm','$dst')";
      $query1=mysqli_query($lin,"UPDATE bookinghistory SET filename=' $filename',name='$frm',path='$dst' WHERE uname='$var'AND aid ='$_GET[aid]'");
      
      if($query1==true)
      {
          echo "inserted";
      }
  }
    
    ?>


   
	     </div><!--================ centre ends here===============-->
  </div>
  
    <!--================ Middle ends here===============-->
    
    
<?php include 'footer.php'; ?> 
 
 </div><!--Container Ends-->
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
    <title>upload file</title>
    
</head>
    <body>
</html>
