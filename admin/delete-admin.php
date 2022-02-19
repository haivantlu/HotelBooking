<?php 

    include('../config/constants.php');
     
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE admin_id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>xóa tài khoản thành công</div>";
        header('location:manage-admin.php');
    }
    else
    {

        $_SESSION['delete'] = "<div class='error'>Xóa thất bại,thử lại sau</div>";
        header('location:manage-admin.php');
    }


?>