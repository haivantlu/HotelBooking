<?php 
    include('../config/constants.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="../CSS/style.css">
  <style>
	#openNav{
		background: #333!important;
	}
  a{
  font-family: sans-serif;
  font-size: 17px;
  font-weight: 100;
  }
  .w3-sidebar{
    position: relative;
    background-color: whitesmoke!important;
  }

  </style>
</head>
<body>
 
<div class="jumbotron-liquid">
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button  style="font-size:20px";class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"><img src="https://icons.iconarchive.com/icons/rafiqul-hassan/blogger/24/Close-icon.png" alt="">  Close &times;</button> <hr class="line1">
  <a href="index.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-11/16/Application-icon.png" alt=""> Trang chủ</a> <hr class="line1">
  
  <a href="manage-admin.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/icons8/windows-8/16/Users-Administrator-2-icon.png" alt="">Tài khoản admin</a> <hr class="line1">
  <a href="manage-room.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/icons8/windows-8/16/Household-Room-icon.png" alt=""> Quản lý phòng</a> <hr class="line1">
  <a href="manage-service.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/praveen/minimal-outline/16/gallery-icon.png" alt=""> Quản lý dịch vụ</a> <hr class="line1">
  <a href="oder_room.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/praveen/minimal-outline/16/check-icon.png" alt=""> Đơn đặt phòng</a> <hr class="line1">
  <a href="oder_service.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/praveen/minimal-outline/16/check-icon.png" alt=""> Đơn đặt dịch vụ</a> <hr class="line1">
  <a href="manage-event.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/pelfusion/long-shadow-ios7/16/News-icon.png" alt=""> Quản lý tin tức</a> <hr class="line1">
  <a href="../index.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/praveen/minimal-outline/16/share-2-icon.png" alt="">Trang chủ</a> <hr class="line1">
  <a href="logout.php" class="w3-bar-item w3-button"><img src="https://icons.iconarchive.com/icons/praveen/minimal-outline/16/share-2-icon.png" alt=""> Đăng xuất</a> <hr class="line1">
  <a href="#" class="w3-bar-item w3-button"><img src="https://png.pngtree.com/png-vector/20190216/ourlarge/pngtree-number-6-vector-template-design-illustration-png-image_558284.jpg" style="width:100%;height:150px"></a>
</div>

<div id="main">

<div class="w3-teal" style="background-color: #333!important;">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h3 class=""> Quản Lý Khách Sạn Marriot </h3>
  </div> 
</div>


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "18%";
  document.getElementById("mySidebar").style.width = "18%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>




 


      