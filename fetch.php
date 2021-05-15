<?php

 include 'mysqli.php';

 $query='SELECT * FROM `img_user`';

 $stm=$connect->prepare($query);
 $stm->execute();
 $fetch_img=$stm->FetchAll();

 foreach ($fetch_img as $row) 
 {
 	echo "<img  src='".$row['img']."' />"; 
 }
?>