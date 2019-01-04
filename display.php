<!DOCTYPE html>
<html>
<head>
    <title>upload file</title>
    
</head>
    <body>
        <?php
         $lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
        
        
      $query1=mysqli_query($lin,"SELECT * FROM bookinghistory WHERE aid='$_GET[aid]'");   
        while($row=mysqli_fetch_array($query1))
        {
            $path=$row['path'];
            $aid=$row['aid'];
            echo "<img src='$path' width='200' height='100'>";
           // echo '<img src="'.$path.'" width="200px" height="200px"/>';
            
        }
        
        
        ?>
        <a href="download.php?aid=<?php echo $aid ?>">Download</a>
    </body>
</html>