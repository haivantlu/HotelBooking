<?php ob_start();
include('partials/header.php'); 
$user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
// echo $user;
if(empty($user)){
  header("location:login.php");
}
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
                    <h6>Quản lí tài khoản</h6>
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
                <a href="add-admin.php" class="btn btn-primary add " ><i class="fas fa-user-plus"></i>Thêm tài khoản</a>
                 <br>
                <!-- <div class="row justify-content-center"> -->
                <form  class="text-center"action="" method="POST">
                <input class="search" type="search" name="search" placeholder="Tìm kiếm tài khoản.." >
                <input type="submit" name="submitsearch" value="Search" class="btn btn-secondary btn-search">
                <input type="submit" name="submitall" value="All" class="btn btn-secondary btn-search">
                </form> 
                <!-- </div> -->
                <br>

                <!-- <br /><br /><br /> -->

                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Đổi mật khẩu</th>
                        <th scope="col">Sửa đổi</th>
                        <th scope="col">Xóa admin</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //    qui trình 4 bước 

                    if(isset($_POST['submitsearch'])){
                        $search= $_POST['search'];
                         // câu truy vấn lấy dữ liệu từ bảng 
                      $sql = "SELECT * FROM tbl_admin WHERE username LIKE '%$search%'OR email LIKE '%$search%'OR sdt LIKE '%$search%'" ;
                     }
                   elseif(empty($_POST['submitsearch'])||isset($_POST['submitall'])){
                        $sql = "SELECT * FROM tbl_admin";
                    }
                        //Execute the Query
                        $result = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if(mysqli_num_rows($result)>0)
                        {
                          while($rows=mysqli_fetch_assoc($result))
                                {
                                echo '<tr>';
                                echo '<th scope="row">'.$rows['admin_id'].'</th>';
                                echo '<td>'.$rows['username'].'</td>';
                                echo '<td>'.$rows['email'].'</td>';
                                echo '<td>'.$rows['sdt'].'</td>';
                                echo '<td><a href="update-password.php?id='.$rows['admin_id'].'"><i class="fas fa-edit"></i></a></td>';
                                echo '<td><a href="update-admin.php?id='.$rows['admin_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                                echo '<td><a href="delete-admin.php?id='.$rows['admin_id'].'"><i class="fas fa-user-times"></i></a></td>';
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
       

<?php include('partials/footer.php'); 
   ob_end_flush();
?>