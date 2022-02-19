<?php ob_start();
include('partials/header.php'); 
  //CHeck whether the button is clicked or not
  if(isset($_POST['submit']))
  {
      $ten_dv=$_POST['ten_dv'];
      $gia_dv=$_POST['gia_dv'];
      $mieu_tadv=$_POST['mieu_tadv'];
      if(isset($_FILES['image'])){
          $file=$_FILES['image'];
          $file_name=$file['name'];
          move_uploaded_file($file['tmp_name'],'../images/service/'.$file_name);
      }
        $sql="INSERT INTO tbl_service(ten_dv,gia_dv,anh,mieu_tadv) VALUES('$ten_dv','$gia_dv','$file_name','$mieu_tadv')";
        $res=mysqli_query($conn,$sql);
        if($res){
        $_SESSION['add'] = "<div class='text-success'>Thêm dịch vụ thành công</div>";
            header("location:manage-service.php");
        }else{
        $_SESSION['add'] = "<div class='error'>Thất bại</div>";
        header("location:manage-service.php");
        
         }
  }
?>
 <div class="row justify-content-center">
 <div class="col-md-4 col-sm-6 col-xs-12 row-container">
    <div class="bg-white border border-muted px-0  mt-1" > 
         <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
         <h6>Thêm mới dịch vụ</h6>
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
                    <label for="ten_dv">Tên dịch vụ:</label>
                    <input type="text" class="form-control" name="ten_dv" id="ten_dv" >
                </div>

                <div class="form-group ">
                    <label for="gia_dv">Giá dịch vụ:</label>
                    <input type="text" class="form-control" name="gia_dv" id="gia_dv" >
                </div>

                <div class="form-group ">
                    <label for="image">Chọn ảnh:</label>
                    <input type="file" class="form-control" name="image" id="ten_dv" >
                </div>
                <div class="form-group mb-0">
                        <label for="myTextarea2">Mô tả:</label>
                        <textarea name="mieu_tadv" id="myTextarea2" class="form-control" rows="3"></textarea>
                </div>
                    <input  type="submit" name="submit" value="Hoàn thành" class="btn btn-secondary my-3">
                </div>
        
        

        </form>

        </div>
      


    </div>
</div>

<?php
ob_end_flush(); 
 include('partials/footer.php'); ?>