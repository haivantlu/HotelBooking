<?php  
    include '../config/constants.php';


           $id=$_POST['id'];
           $ten_tin= $_POST['ten_tin'];
           $mieu_tatin = $_POST['mieu_tatin'];
           $ngay= $_POST['ngay'];
           $file_name=$_POST['anh'];
           
           if (!$ten_tin || !$mieu_tatin || !$ngay || !$file_name)
           {
         echo "<h1>Vui lòng nhập đầy đủ thông tin.</h1>  <h2><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
         exit;
           }
            $sql="UPDATE tbl_news set ten_tin='$ten_tin',mieu_tatin='$mieu_tatin',
            ngay='$ngay',anh='$file_name' where tintuc_id='$id'";

            $result = mysqli_query($conn,$sql);
    // Bước 03:
           if($result > 0)
            header("Location:manage-event.php");
              else
                    echo ("lỗi $sql");
                         
 ?>