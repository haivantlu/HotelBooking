<?php 
ob_start();
include('partials/header.php'); 
  //CHeck whether the button is clicked or not
  if(isset($_POST['submit']))
  {
      $ten_phong=$_POST['ten_phong'];
      $so_luong=$_POST['so_luong'];
      $gia_phong=$_POST['gia_phong'];
      $tong_tien=$_POST['tong_tien'];
      $tinh_trang=$_POST['tinh_trang'];
      $mieu_ta=$_POST['mieu_ta'];
      $gioi_thieu=$_POST['gioi_thieu'];



      if(isset($_FILES['anh'])){
          $file=$_FILES['anh'];
          $file_name=$file['name'];
          move_uploaded_file($file['tmp_name'],'../images/room/'.$file_name);
      }
        $sql="INSERT INTO tbl_room(ten_phong,so_luong,gia_phong,tong_tien,anh,tinh_trang,mieu_ta,gioi_thieu) VALUES('$ten_phong','$so_luong','$gia_phong','$tong_tien','$file_name','$tinh_trang','$mieu_ta','$gioi_thieu')";
        $res=mysqli_query($conn,$sql);
        if($res){
        $_SESSION['add'] = "<div class='text-success'>Thêm phòng thành công</div>";
            header("location:manage-room.php");
        }else{
        $_SESSION['add'] = "<div class='error'>Thất bại</div>";
        header("location:manage-room.php");
        
         }
  }
?>
 <div class="row justify-content-center">
 <div class="col-md-4 col-sm-6 col-xs-12 row-container">
    <div class="bg-white border border-muted px-0  mt-1" > 
         <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
         <h6>Thêm mới phòng</h6>
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
                    <input type="text" class="form-control" name="ten_phong" id="ten_phong" >
                </div>

                <div class="form-group ">
                    <label for="so_luong">Số lượng:</label>
                    <input type="text" class="form-control" name="so_luong" id="so_luong" >
                </div>
                <div class="form-group ">
                    <label for="gia_phong">Giá phòng:</label>
                    <input type="text" class="form-control" name="gia_phong" id="gia_phong" >
                </div>
                <div class="form-group ">
                    <label for="tong_tien">Tổng tiền:</label>
                    <input type="text" class="form-control" name="tong_tien" id="tong_tien" >
                </div>

                <div class="form-group ">
                    <label for="anh">Chọn ảnh:</label>
                    <input type="file" class="form-control" name="anh" id="anh" >
                </div>

                <div class="form-group ">
                    <label for="tinh_trang">Tình trạng:</label>
                    <input type="text" class="form-control" name="tinh_trang" id="tinh_trang" >
                </div>

                <div class="form-group mb-0">
                        <label for="mieu_ta">Miêu tả:</label>
                        <textarea name="mieu_ta" id="mieu_ta" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group mb-0">
                        <label for="gioi_thieu">Giới thiệu:</label>
                        <textarea name="gioi_thieu" id="gioi_thieu" class="form-control" rows="3"></textarea>
                </div>
                    <input  type="submit" name="submit" value="Hoàn thành" class="btn btn-secondary my-3">
                </div>
        
        

        </form>

        </div>
      


    </div>
</div>

<?php include('partials/footer.php');
ob_end_flush(); ?>