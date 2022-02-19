<?php
  include('config/constants.php');
  $user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Trang chu</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./demo.css"> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

      

      <style>

        img {
          vertical-align: middle;
          
        }
        
        
        
        /* Hide the images by default */
        .mySlides {
          display: none;
        }
        
        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
          cursor: pointer;
        }
        
        /* Next & previous buttons */
        .prev,
        .next {
          cursor: pointer;
          position: absolute;
          top: 15%;
          width: auto;
          padding: 16px;

          margin-left: -20px;
          color: white;
          font-weight: bold;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
          -webkit-user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
          background-color: rgba(0, 0, 0, 0.8);
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* Container for image text */
        .caption-container {
          text-align: center;
          background-color: #222;
          padding: 2px 16px;
          color: white;
        }
        
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        
        
        .active,
        .demo:hover {
          opacity: 1;
        }
        
        
        
        .container-fluid {
          position: relative;

        }
        .container1{
            position: relative; 
            margin-top: 00%;
        }
        /* Center website */
        .main {
          max-width: 1000px;
          margin: auto;
        }
        h1 {
          font-size: 50px;
          word-break: break-all;
        }
        .row {
          margin-left: -30px;
          margin-top: 3%;
        }
        /* Add padding BETWEEN each column */
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 33.33%;
          display: none; /* Hide all elements by default */
        }
        /* Content */
        .content {
          background-color: white;
          padding: 10px;
        }
        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }
        /* Style the buttons */
        .btn {
          border: none;
          outline: none;
          padding: 12px 16px;
          background-color: white;
          cursor: pointer;
        }      
        .btn:hover {
          background-color: #ddd;
        }
        
        .btn.active {
          background-color: #666;
          color: white;
        }
        
        body{
            position: absolute
        }
        .image {
          opacity: 1;
          display: block;
          width: 100%;
          height: auto;
          transition: .5s ease;
          backface-visibility: hidden;
        }
        
        .middle {
          transition: .5s ease;
          opacity: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }
        
.container:hover .image {
          opacity: 0.3;
        }
        
.container:hover .middle {
          opacity: 1;
        }
.text {
          background-color: #04AA6D;
          color: white;
          font-size: 16px;
          padding: 16px 32px;
        }
.mySlides{
            width: 102.2%;
            margin-left: -1.1%;
        }
        
.topnav {
    width: 100%;
    background-color: #333;
    position: fixed;
    z-index: 2;
}
 
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px;
}
 
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
 
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
#logo{
  width:40%;
}



        </style>
</head>
   <body>
    <div class="topnav">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Marriott</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav ml-auto mr-4">
             <?php if(isset( $user['username'])){?>
              <li class="nav-item">
                 <a class="nav-link" href="index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="intro.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="room.php">Phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Dịch vụ</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="contact.php">Liên hệ</a>
             </li>
<!--           
             <li class="nav-item ">
             <a class="nav-link" href="logout.php">Đăng xuất</a>
            </li> -->
            <li class="nav-item">
            <li class="nav-item dropdown">
             <a class="nav-link acc  dropdown-toggle  rounded text-light" href="#" data-toggle="dropdown" ><?php  echo $user['username']; ?><i class="fas fa-user-circle text-light"></i></a>
               <div class="dropdown-menu">
                  <a class="dropdown-item text-secondary" href="show_cart.php">Đơn hàng</a>
                  <a class="dropdown-item text-secondary" href="logout.php">Đăng xuất</a>
               </div>
             </li>
             </li>

             </li>
             <?php }else{?>
             <li class="nav-item">
                 <a class="nav-link" href="index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="intro.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="room.php">Phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Dịch vụ</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="contact.php">Liên hệ</a>
             </li>
          
             <li class="nav-item ">
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Đăng nhập
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item text-secondary" href="login.php"><i class="fas fa-user icon text-secondary"></i>Người dùng</a>
                  <a class="dropdown-item text-secondary" href="admin/login.php"><i class="fas fa-user-cog icon text-secondary"></i> Quản trị viên</a>
               </div>
            </li>
             </li>
             <?php } ?>
           </ul>
        </div>
     </nav>
    </div>