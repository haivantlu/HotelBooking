
<?php
include('../config/constants.php');?>
<?php
    if(isset($_GET['id'])){
        $bs_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tbl_order_services SET tinh_trang = 'Đã hủy' WHERE bs_id = '$bs_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
            echo '<script>';
            echo 'alert ("Hủy đơn thành công");';
            echo "location.href = 'oder_service.php';";   
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi xảy ra");';  
            echo "location.href = 'oder_service.php';";   
            echo '</script>';
        }
    }
?>