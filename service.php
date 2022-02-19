<?php 
 include('partials-front/header.php');
 
 ?>


    <style>
      body{
          position: relative;
      }
      .div1{
          background-color: #f5f6fa;
          padding-top:8%;
      }
      .div2{
          background-color: white;
      }
      .icon-service{
           width: 10%;
            float: left;
        }
        .laptop{
            color:#9972b5;
        }
        .wifi{
            color:#1e90ff;
        }
        .home{
            color: yellow;
        }
        h3{
            padding-left:6%;
        }
        h2{
            font-size: 36px;
            font-weight: 300;
            font-family: 'Playfair Display', serif;
            opacity:0.8;
        }
        p{
            opacity: 0.5;
        }
        .clearfix{
            clear: both;
            float:none;
        }
        .outline{
            width: 100%;
            height: 25px;
            background-image: url(http://landing.engotheme.com/html/skyline/demo/images/Home-1/icon-our.png);
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 2%;
        }
        .center{
            padding: 3% 0;
            margin: 3% 0;
        }
        .card{
            cursor: pointer;
            border: none;
            background-color:white ;
            box-shadow: 1px 2px 5px 1px grey;
            transition: 0.3s ease-in-out;
            margin-top: 4%;
            float:left;
        }
        .card:hover{
            transform: translateY(-6px);
        }
      
        .card-title{
            font-size: 17px;
            display:inline;
            text-transform: uppercase;
            font-weight: bold; 
            font-family: "Montserrat", sans-serif;
            color: #3d3d3d;
            padding-left: 6%;
        }
        .card-text{
            font-size: 14px;
            line-height: 2em;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        .content1{
            width: 280px;
            height: 150px;
            background-color:#ffffff ;
            border-radius: 10px;
            padding-left: 3%;
        }
        .card-body{
            padding: 2%;
        }
        .head{
            float:left;
            padding: 2%;
            padding-left: 4%;
            /* background-color: #f5f6fa; */
        }
        .box{
            margin-left: 5%;
            float:left;
            width: 18rem;
        }
        .card-img-top{
            width: 100%;
            height: 145px;
            transition: all 1s;
            
        }
        .card-img-top:hover{
            -webkit-transform: scale(1.2); transform: scale(1.2); 
        }
        .btn{
            background-color: #576574;
            color: white;
        }
        main{
            position:relative;
        }
        .divide{
         height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgb(0 0 0 / 10%), inset 0 0.125em 0.5em rgb(0 0 0 / 15%);
        }
        .search{
            height: 45px;
            width:40%;
            border:none;
        }
        form{
          padding-top:2%
        }
        .btn-primary{
            height: 45px;

        }
    
    </style>
  <main>
    <div class="container-fluid div1">
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
        <!-- start tiêu đề  -->
      <div class="container mt-4">
        <div class="container text-center">
            <h2>Dịch vụ đi kèm</h2>
            <div class="outline ">
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
         </div>
      </div>
       <!-- end tiêu đề  -->
      
       <!-- start dịch vụ có sẵn  -->
      <div class="container div2">
      
        <div class="col-md-4 head">
            <div class="card ">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-laptop laptop"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">Phục vụ 24/7</h4>
                        <p class="card-text">Chúng tôi luôn sẵn sàng phục vụ quý khách hàng mọi lúc</p>
                    </div>
               </div>
                <div class="clearfix"></div>
            </div>
        </div>

       <div class="col-md-4 head">
           <div class="card ">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-wifi wifi"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">WIFI</h4>
                       <p class="card-text">Miễn phí truy cập internet với tốc độ cao trong khuôn viên khách sạn</p>
                    </div>
                </div>
               <div class="clearfix"></div>
            </div>
       </div>
      

       <div class="col-md-4  head">
           <div class="card">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-home home"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">Dịch vụ phòng</h4>
                       <p class="card-text">Cung cấp dịch vụ chuẩn 5 sao hàng đầu mang đến trải nghiệm tuyệt vời </p>
                    </div>
                </div>
               <div class="clearfix"></div>
            </div>
       </div>
       <div class="clearfix"></div>
      </div>
   
    <!-- end dịch vụ có sẵn  -->
    <!-- <div class="container-fluid mt-5"> -->
    <div class="divide mt-5"></div>
    <!-- </div> -->
    <!-- <div class="container-fluid text-center center "  style="background-color:#747d8c;">
        <h2 style="color:white">TIỆN ÍCH</h2>

    </div> -->
     <!-- <div class="container justify-content-center"> -->
            <form  class="text-center"action="" method="POST">
            <input class="search" type="search" name="search" placeholder="Tìm kiếm dịch vụ.." required>
            <input type="submit" name="submitsearch" value="Search" class="btn btn-primary ">
            </form> 
    <!-- </div> -->
    <!-- start dịch vụ thêm  -->
    <div class="container">
            
             <?php 
             if(isset($_POST['submitsearch'])){
                  $search= $_POST['search'];
                   // câu truy vấn lấy dữ liệu từ bảng 
                $sql = "SELECT * FROM tbl_service WHERE ten_dv LIKE '%$search%'";
              
             }
             else{
            // câu truy vấn lấy dữ liệu từ bảng 
                $sql = "SELECT * FROM tbl_service";}
            //   thực thi câu truy vấn 
                $res=mysqli_query($conn, $sql);
             // đếm dòng 
            //  var_dump($res);
                $count = mysqli_num_rows($res);
            // kiểm tra dữ liệu 
            if($count>0)
            {  
                    // lặp  hết dòng
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //lấy giá trị
                        $id = $row['dv_id'];
                        $title = $row['ten_dv'];
                        $description = $row['mieu_tadv'];
                        $price = $row['gia_dv'];
                        $image_name = $row['anh'];
                        
           ?>
                   <div class="col-md-6 col-sm-12 card box">
                    <?php 
                        //kiểm tra ảnh có trong cơ sở dữ liệu 
                        if($image_name=="")
                        {
                            echo "<div class='error'>Ảnh không có sẵn</div>";
                        }
                        else
                        {
                        ?>
                           <img src="images/service/<?php echo $image_name; ?>" alt="Ảnh dịch vụ" class="card-img-top" >
                            <?php
                            }
                          ?>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $title;?></h5></br>
                           <img  style="width: 40%;"src="https://th.bing.com/th/id/OIP.S57GDn_3Tw7T9Ft8lvb-mQHaB7?w=344&h=91&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="" srcset="">
                            <h3><?php echo $price.'VNĐ'; ?></h3>
                           <p class="card-text">
                                <?php echo $description;  ?>
                            </p>
                            <a href="order_service.php?dv_id=<?php echo $id; ?>"class="btn btn-infor">Đặt dịch vụ</a>
                            </div>
                    </div>
                        <?php
                    }
                }
            else
            {
                echo "<div class='error'>Không tìm thấy dịch vụ.</div>";
            }
            ?>
            
       </div>
       <!-- end dịch vụ thêm  -->
    <div class="clearfix"></div>
</div>
 </main>
  
  <?php include('partials-front/footer.php'); ?>
