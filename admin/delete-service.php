<?php 
    include('../config/constants.php');
    if(isset($_GET['id']) && isset($_GET['anh'])) //Either use '&&' or 'AND'
    {
      
        $id = $_GET['id'];
        $image_name = $_GET['anh'];
        $res=mysqli_query($conn,"DELETE FROM `tbl_service` WHERE dv_id=$id");
        // var_dump($res);
        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'>Xóa dịch vụ thành công</div>";
            header('location:manage-service.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Xóa dịch vụ thất bại</div>";
            header('location:manage-service.php');
        }

        

    }
    else
    {
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:manage-service.php');
    }

?>