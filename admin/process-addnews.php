<?php
include '../config/constants.php';

    $ten_tin = $_POST['ten_tin'];
    $mieu_tatin = $_POST['mieu_tatin'];
    $ngay = $_POST['ngay'];

  if(isset($_FILES['anh'])){
    $file=$_FILES['anh'];
    $file_name=$file['name'];
     move_uploaded_file($file['tmp_name'],'../images/'.$file_name);}
     if (!$ten_tin || !$mieu_tatin || !$ngay || !$file_name)
     {
         echo "<h1>Vui lòng nhập đầy đủ thông tin.</h1>  <h2><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
         exit;
     }
    $sql = "INSERT INTO tbl_news (ten_tin,mieu_tatin,ngay,anh)
    VALUES ('$ten_tin','$mieu_tatin','$ngay','$file_name')";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:manage-event.php");
    }else{
        echo "Lỗi!";
    }

    

    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>