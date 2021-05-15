<?php

 include 'mysqli.php';
 
 $tmp_name_img=$_FILES['file']['tmp_name'];

 $ext_img=pathinfo($tmp_name_img,PATHINFO_EXTENSION);

 $data=file_get_contents($tmp_name_img);

 $img_base64=base64_encode($data);

 $img='data:image/'.$ext_img.';base64,'.$img_base64;

 $query='INSERT INTO `img_user`(`img`) VALUES ("'.$img.'")';

 $stm=$connect->prepare($query);
 $stm->execute();



?>