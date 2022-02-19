<?php
ob_start();
 include('partials/header.php'); 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql= "SELECT * FROM `tbl_room` WHERE room_id=$id";
    // var_dump($sql);
    $res = mysqli_query($conn,$sql);
    // var_dump($res);

    if($res==true){
    $room=mysqli_fetch_assoc($res);
    // var_dump($service);
    }
}
//   CHeck whether the button is clicked or not
  if(isset($_POST['submit']))
  {
      $ten_phong=$_POST['ten_phong'];
      $so_luong=$_POST['so_luong'];
      $gia_phong=$_POST['gia_phong'];
      $tong_tien=$_POST['tong_tien'];
      $tinh_trang=$_POST['tinh_trang'];
      $mieu_ta=$_POST['mieu_ta'];
      $gioi_thieu=$_POST['gioi_thieu'];


      if(empty($_FILES['anh']['name'])){
          $anh=$room['anh'];
        }
          
      else{
          $file=$_FILES['anh'];
          $file_name=$file['name'];
          move_uploaded_file($file['tmp_name'],'../images/room/'.$file_name);
          $anh=$file_name;
      }
      $sql="UPDATE tbl_room SET ten_phong='$ten_phong' ,so_luong='$so_luong',gia_phong='$gia_phong',tong_tien = '$tong_tien',anh='$anh',tinh_trang = '$tinh_trang',mieu_ta='$mieu_ta',gioi_thieu='$gioi_thieu' WHERE room_id=$id";
        $res=mysqli_query($conn,$sql);
        if($res){
        $_SESSION['update'] = "<div class='text-success'>Cập nhật dịch vụ thành công</div>";
            header("location:manage-room.php");
        }else{
        $_SESSION['update'] = "<div class='error'>Cập nhật thất bại</div>";
        header("location:manage-room.php");
        
         }
  }
?>
   <div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 col-xs-12 row-container">
    <div class="bg-white border border-muted px-0  mt-1" > 
         <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
         <h6>Thay đổi thông tin phòng</h6>
         </nav>
        <br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
       
       <form action="" method="POST" class="" enctype="multipart/form-data">
            <div class="px-3">
               <div class="form-group ">
                    <label for="ten_phong">Tên phòng:</label>
                    <input type="text" class="form-control" name="ten_phong" value = "<?php echo $room['ten_phong']; ?> " id="ten_phong" >
                </div>

                <div class="form-group ">
                    <label for="so_luong">Số lượng:</label>
                    <input type="text" class="form-control" name="so_luong" value = "<?php echo $room['so_luong']; ?> " id="so_luong" >
                </div>
                <div class="form-group ">
                    <label for="gia_phong">Giá phòng:</label>
                    <input type="text" class="form-control" name="gia_phong" value = "<?php echo $room['gia_phong']; ?> " id="gia_phong" >
                </div>
                <div class="form-group ">
                    <label for="tong_tien">Tổng tiền:</label>
                    <input type="text" class="form-control" name="tong_tien" value = "<?php echo $room['tong_tien']; ?> " id="tong_tien" >
                </div>

                <div class="form-group ">
                    <label for="anh">Chọn ảnh:</label>
                    <input type="file" class="form-control" name="anh" value = "<?php echo $room['anh']; ?> " id="anh" >
                </div>

                <div class="form-group ">
                    <label for="tinh_trang">Tình trạng:</label>
                    <input type="text" class="form-control" name="tinh_trang"value = "<?php echo $room['tinh_trang']; ?> " id="tinh_trang" >
                </div>

                <div class="form-group mb-0">
                        <label for="mieu_ta">Miêu tả:</label>
                        <input type="text" class="form-control" name="mieu_ta"value = "<?php echo $room['mieu_ta']; ?> " id="tinh_trang" >
                </div>
                <div class="form-group mb-0">
                        <label for="gioi_thieu">Giới thiệu:</label>
                        <input type="text" class="form-control" name="gioi_thieu"value = "<?php echo $room['gioi_thieu']; ?> " id="tinh_trang" >
                </div>
                    <input  type="submit" name="submit" value="Hoàn thành" class="btn btn-secondary my-3">
                </div>
    </div>
    </div>
</div>
<br>
<?php include('partials/footer.php');
    ob_end_flush(); ?>