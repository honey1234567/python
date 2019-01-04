<?php 
include 'db.php';
    $query = "SELECT * FROM chat ORDER BY msg_id DESC";
	$run = $db->query($query);
    while($row = $run->fetch_array()):	//while loop break not needed to use curely brackets
  ?>
        
      <div id="chat_data">
       <!--<span style="color:red;"><?php //echo $row['name']; ?> </span>-->
       <span style="color:green;"><textarea><?php echo $row['msg']; ?></textarea></span>
       <span style="float:right;"><?php echo formateDate($row['date']); ?></span>
      </div>
     <?php endwhile; ?>