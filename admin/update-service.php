
<?php 
ob_start();

include('partials/header.php'); 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql= "SELECT * FROM `tbl_service` WHERE dv_id=$id";
    // var_dump($sql);
    $res = mysqli_query($conn,$sql);
    // var_dump($res);
    if($res==true){
    $service=mysqli_fetch_assoc($res);
    // var_dump($service);
    }
}
  //CHeck whether the button is clicked or not
  if(isset($_POST['submit']))
  {
      $ten_dv=$_POST['ten_dv'];
      $gia_dv=$_POST['gia_dv'];
      $mieu_tadv=$_POST['mieu_tadv'];
      if(empty($_FILES['image']['name'])){
          $anh=$service['anh'];
        }
          
      else{
          $file=$_FILES['image'];
          $file_name=$file['name'];
          move_uploaded_file($file['tmp_name'],'../images/service/'.$file_name);
          $anh=$file_name;
      }
      $sql="UPDATE tbl_service SET ten_dv='$ten_dv' ,gia_dv='$gia_dv',anh='$anh',mieu_tadv='$mieu_tadv' WHERE dv_id=$id";
        $res=mysqli_query($conn,$sql);
        if($res){
        $_SESSION['update'] = "<div class='text-success'>Cập nhật dịch vụ thành công</div>";
            header("location:manage-service.php");
        }else{
        $_SESSION['update'] = "<div class='error'>Cập nhật thất bại</div>";
        header("location:manage-service.php");
        
         }
  }
?>
   <div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 col-xs-12 row-container">
    <div class="bg-white border border-muted px-0  mt-1" > 
         <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
         <h6>Thay đổi thông tin dịch vụ</h6>
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
                    <input type="text" class="form-control" name="ten_dv" id="ten_dv" value="<?php echo $service['ten_dv']?>">
                </div>

                <div class="form-group ">
                    <label for="gia_dv">Giá dịch vụ:</label>
                    <input type="text" class="form-control" name="gia_dv" id="gia_dv"  value="<?php echo $service['gia_dv']?>" >
                </div>
                <img src="../images/service/<?php echo $service['anh']  ?>" width="150px" alt="" >

                <div class="form-group ">
                    
                    <label for="image">Chọn ảnh:</label>
                    
                    <input type="file" class="form-control" name="image" id="ten_dv" >
                </div>
                <div class="form-group mb-0">
                        <label for="myTextarea2">Mô tả:</label>
                        <textarea name="mieu_tadv" id="myTextarea2" class="form-control" rows="3"><?php echo $service['mieu_tadv']?></textarea>
                </div>
                    <input  type="submit" name="submit" value="Hoàn thành" class="btn btn-secondary my-3">
                </div>
        
        

        </form>

      


    </div>
</div>
<br>
        </body>
        </html>
<?php 
ob_end_flush(); ?>