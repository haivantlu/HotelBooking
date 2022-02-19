<?php
include('../config/constants.php');?>
<?php
    if(isset($_GET['id'])){
        $book_id = $_GET['id'];
        //truy vấn
        $sql ="UPDATE tbl_oder_room SET tinh_trang = 'Đã xác nhận' WHERE book_id = '$book_id'";
        $result = mysqli_query($conn,$sql);
        if($result>0){
            echo '<script>';
            echo 'alert ("Xác nhận đơn thành công");';
            echo "location.href = 'oder_room.php';";   
            echo '</script>';
        }else{
            echo '<script>';
            echo 'alert ("Có lỗi xảy ra");';  
            echo "location.href = 'oder_room.php';";   
            echo '</script>';
        }
    }
?>