<?php 
ob_start();
include('partials/header.php');
$user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
// echo $user;
if(empty($user)){
  header("location:login.php");

}

 ?>
<style>
     .main-content{
          margin-top: 10px;
     }
     h3{
   font-size: 70px;
   text-align: center;
   font-family: sans-serif;
   text-shadow: 2px 2px 10px #000;
   

     }
     span{
          text-align: center;
          font-weight: 500;
          font-size: 30px;
          font-family: sans-serif;
          color: white;
          
     } 
     .col-sm-3{
        
        border-radius: 5px;  
        border: 2px solid gray;
        margin-bottom: 30px;
        background-color: darkgray;
        text-align:center;
        padding-top: 10px;
        height: 40%;
      
     }
     .divider {
    margin: 30px 0;
}
.divider .line1 {
    width: 50px;
}
.divider .line2{
  width: 200px;
}
.divider .line1, .divider .line2 {
     text-align: center;
    height: 1px;
    background-color: #deaa86;
    margin: 3px auto;
}
    
  </style>
        <!-- Main Content Section Starts -->
        <div class="main-content">
            
                <h3>Dashboard</h3>
                <div class="divider">
               <hr class="line1">
               <hr class="line2">
               </div>   
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>
                <div class="container">
               <div class="row">
                <div class="col-sm-3">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tbl_room";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                     <br>
                   <span>Tổng số phòng</span>
                </div>

                <div class="col-sm-3">
                <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_service";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />

                <span> Tổng dịch vụ</span>
                </div>

                <div class="col-sm-3">
                <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM tbl_oder_room";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />

                <span> Số phòng đặt </span>
                </div>

                <div class="col-sm-3 ">
                <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        $sql1 = "SELECT SUM(tong_tien) AS Tong_tien1 FROM tbl_oder_room WHERE tinh_trang= 'Đã xác nhận'";

                        //Execute the Query
                        $res1 = mysqli_query($conn, $sql1);
        
                        //Get the VAlue
                        $row1 = mysqli_fetch_assoc($res1);
                        
                        //GEt the Total REvenue
                        $sql2 = "SELECT SUM(tong_tien) AS Tong_tien2 FROM tbl_order_services WHERE tinh_trang= 'Đã xác nhận'";
        
                        //Execute the Query
                        $res2 = mysqli_query($conn, $sql2);
        
                        //Get the VAlue
                        $row2 = mysqli_fetch_assoc($res2);
                        
                        //GEt the Total REvenue
                        $Tong = $row1['Tong_tien1'] + $row2['Tong_tien2'];

                    ?>

                    <h1><?php echo $Tong; ?></h1>
                    <br />

                <span> Tổng Doanh thu</span>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>

           
        </div>
        <!-- Main Content Setion Ends -->


<?php include('partials/footer.php');
ob_end_flush(); ?>