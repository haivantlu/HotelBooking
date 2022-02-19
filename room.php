<?php include('partials-front/header.php'); ?>


<meta charset="utf-8">
        <title>Bootstrap Card</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./demo.css"> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <div class="ok">
            <div class="container-fluid div1">
               <!-- start tiêu đề  -->
             <div class="container-fluid">
               <div class="container text-center">
                   <h2>---------PHÒNG ĐƠN---------</h2>
                   <div class="outline ">
                   </div>
                   <p>Không gian rộng rãi và yên tĩnh, tạo cảm giác thoái mái dành cho khách hàng</p>
                </div>
             </div>
            </div>
       
             <style>
               body{
                 background-color: gainsboro;
               }
               .clearfix{
                clear:both;
                float:none;
                }

                 .ok{
                     margin-top: 7%;

                     background-color: gainsboro;
                 }
                 h2{
                   font-size: 42px;
                   color: rgb(19, 0, 126);
                   font-weight: 300;
                   font-family: 'Playfair Display', serif;
                   opacity:0.8;
               }
               .outline{
                   width: 100%;
                   height: 25px;
                   background-image: url(http://landing.engotheme.com/html/skyline/demo/images/Home-1/icon-our.png);
                   background-repeat: no-repeat;
                   background-position: center;
                   margin-bottom: 2%;
               }
               
            
                h4{
                    margin-left: 3%;
                    margin-bottom: 2%;
                    font-size: 20px;
                    font-weight: bold;
                    font-weight: 300;
                    font-family: 'Times New Roman', Times, serif;
                    color: black;
                    opacity:0.8;
                
                }
                

                
                button {
                transition-duration: 0.4s;
                margin-left: 3%;
                height: 40px;
                width: 150px;
                background-color:#8E7037;
                font-weight: bolder;
                color: white;
                }

                button:hover {
                    background-color: #ffffff;
                    color: #8E7037;
                    
                }
                h5{
                  margin-left: 3%;
                    font-size: 35px;
                    font-weight: bold;
                    font-family: 'Playfair Display', serif;
                    color: rgb(1, 90, 6);
                  
                }
                p{
                  margin-left: 3%;
                  font-weight: bolder;
                  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-weight: normal;
                  font-size: 18px;

                }

                .p1{
                  font-size: 18px;
                }
                .card-body{
                  overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/
                  position: relative;
                  margin-left: -2%;
                }
                .card{
                  width: 100%;
                  border: white;
                  background-color: gainsboro;
                }

                img{
                  width: 60%;
                  height: 50%;
                  margin-left: -2%;
                  transition: all 1s;
                } 
                img:hover{
                  -webkit-transform: scale(1.2); transform: scale(1.2);

                }
                .co{
                  overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/
                  position: relative;
                  margin-left: -2%;
                }
                .them{
                  width: 40%;
                  margin-left: 1.5%;
                  margin-top: -22%;
                }
                hr{
                    height: 5px;
                  }
                  .ok1{
                    margin-top: 3%;
                  }
      </style>
    <?php 
  
   

  $conn = mysqli_connect('localhost','root', '','ht');
     if(!$conn){
      die('Không thể kết nối');
     }

   //Create SQL Query to Display CAtegories from Database
   $sql = "SELECT * FROM tbl_room";
   //Execute the Query
   $res = mysqli_query($conn, $sql);
   //Count rows to check whether the category is available or not
   $count = mysqli_num_rows($res);
   if($count>0)
   {
       //CAtegories Available
       while($row=mysqli_fetch_assoc($res))
       {
           //Get the Values like id, title, image_name

           $anh = $row['anh'];
           $gioi_thieu = $row['gioi_thieu'];
           $ten_phong = $row['ten_phong'];
           $gia_phong= $row['gia_phong'];
           $mieu_ta= $row['mieu_ta'];
           $id= $row['room_id'];
           $_SESSION['room']=$row;
           ?>
           <div class="container-fluid" >
              <div class="row">
                  <div class="card-deck col-md-5 ">
                     <div class="hinh">
                        <div class="card">
                            <div class="card-body">
                                <center><img class="card-img-top" src="./images/room/<?php echo $anh; ?>" style="width: 100%"></center>
                            </div>
                        </div>
                      </div>
                  </div>
              <div class="card col-md-7">
            <div class="card-body">
              <h5 class="card-title"><?php echo $ten_phong; ?></h5>
              <h4>START FORM <?php echo $gia_phong; ?> PER DAY</h4>
              <p class="card-text"><?php echo $mieu_ta; ?></p>
              <form method="POST">
                <button name="submit"><a class="nav-link" href="book.php?room_id=<?php echo $id; ?>">Đặt phòng</a></button>
             </form>
            </div>
       

              </div>
            </div>
            </div>
           <?php
       }
   }
   else
   {
       //Categories not Available
       echo "<div class='error'>Trang chủ không thể thêm .</div>";
   }
?>
<div class="clearfix"></div>
    
 



<?php include('partials-front/footer.php'); ?>