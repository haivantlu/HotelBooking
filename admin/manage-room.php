<?php ob_start();
include('partials/header.php'); 
?>
<style>
    
    form.example input[type=text] {
  padding: 10px;
  font-size: 16px;
  border: none;
  /* float: right; */
  /* width: 80%; */
  background: #f1f1f1;

}
img
.search{
            height: 45px;
            width:25%;
            border:none;
            background-color:#f1f2f6;
        } */
        form{ 
            float:left; 
           padding-top:2%
        }
        .btn-primary{
            height: 45px;

        }
        .add{
    margin-left:87%;
    /* margin-bottom:1%; */
}  


/* Clear floats */

</style>
        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
            <div class="bg-white border border-muted px-0  mt-1" > 
                <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
                    <h6>Quản lí phòng </h6>
                </nav>
                <!-- <h1>Quản lí tài khoản</h1> -->

                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
                <!-- Button to Add Admin -->
                <a href="add-room.php" class="btn btn-primary add " ><i class="fas fa-user-plus"></i>Thêm phòng</a>
                 <br>
                <!-- <div class="row justify-content-center"> -->
               
                <!-- </div> -->
                <br>

                <!-- <br /><br /><br /> -->

                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên phòng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá phòng</th>
                        <!-- <th scope="col">Tổng tiền</th> -->
                        <th scope="col">Ảnh</th>
                        <!-- <th scope="col">Tình trạng</th> -->
                        <th scope="col">Miêu tả</th>
                        <th scope="col">Giới thiệu</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>

                        

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //    qui trình 4 bước 

                    if(isset($_POST['submitsearch'])){
                        $search= $_POST['search'];
                         // câu truy vấn lấy dữ liệu từ bảng 
                      $sql = "SELECT * FROM tbl_room WHERE tenphong LIKE '%$search%'" ;
                     }
                   elseif(empty($_POST['submitsearch'])||isset($_POST['submitall'])){
                        $sql = "SELECT * FROM tbl_room";
                    }
                        //Execute the Query
                        $result = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if(mysqli_num_rows($result)>0)
                        {
                          while($rows=mysqli_fetch_assoc($result))
                                {
                                echo '<tr>';
                                echo '<th scope="row">'.$rows['room_id'].'</th>';
                                echo '<td>'.$rows['ten_phong'].'</td>';
                                echo '<td>'.$rows['so_luong'].'</td>';
                                echo '<td>'.$rows['gia_phong'].'</td>';
                                // echo '<td>'.$rows['tong_tien'].'</td>';
                                echo '<td><img style="width:80px;" src="../images/room/'.$rows['anh'].'"></td>';
                                // echo '<td>'.$rows['tinh_trang'].'</td>';
                                echo '<td>'.$rows['mieu_ta'].'</td>';
                                echo '<td>'.$rows['gioi_thieu'].'</td>';
                                echo '<td><a href="editroom.php?id='.$rows['room_id'].'"><i class="fas fa-user-edit icon">EDIT</i></a></td>';
                                echo '<td><a href="deleteroom.php?id='.$rows['room_id'].'"><i class="fas fa-user-times icon">DELETE</i></a></td>';

                                echo '</tr>';
                                }
                        }
                       ?>

                    </tbody>
                    
                </table>
                    </div>
                    </div>
            </div>
        </div>
       

<?php  ob_end_flush();
 include('partials/footer.php'); ?>