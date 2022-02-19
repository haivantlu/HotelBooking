<?php
$conn = mysqli_connect('localhost','root', '','hotel');
 $sql = "SELECT * FROM tbl_book3";

$co = mysqli_query($conn,$sql);
if($conn == NULL)
echo ("e lỗi r");
?>
 