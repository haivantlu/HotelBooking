<?php include('config/constants.php'); 
include('partials-front/header.php');


     if(isset($_SESSION['user'])){
        $user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];}

          $user_id = $user['user_id'];
          $dv_id = $_POST['dv_id'];
          $tong_tien = $_POST['tong_tien'];
          $date_den =$_POST['date_den'];
          $date_di =$_POST['date_di'];
          $sql2= "INSERT INTO tbl_order_services ( tong_tien,date_den,date_di,dv_id,user_id) VALUES ('$tong_tien','$date_den','$date_di','$dv_id','$user_id')";
          $result = mysqli_query($conn,$sql2);
        //   $sql1 = "INSERT INTO tbl_book (tong_tien,tinh_trang, ngay_den, ngay_di,ngay_book,room_id,use_id,dv_id)
        //        VALUES ('$tong_tien', '$tinh_trang', '$ngay_den', '$ngay_di','$ngay_book','1','$user_id','1')";

        if($result == true){
          echo '<script>';
          echo 'alert ("Đặt dịch vụ thành công!!!");';
          echo "location.href = 'index.php';";     
          echo '</script>';
     }else{
          echo '<script>';
          echo 'alert ("Có lỗi gì đó cả ra. Vui lòng đăng nhập và thử lại!!!");';
          echo "location.href = 'index.php';";     
          echo '</script>';
     }

    //   }else{
    //       header ("location:login.php");
    //   }

?>
