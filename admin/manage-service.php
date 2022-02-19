<?php ob_start();
include('partials/header.php'); 
$user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
// echo $user;
if(empty($user)){
  header("location:login.php");}
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
                    <h6>Quản lí dịch vụ</h6>
                </nav>
                <!-- <h1>Quản lí tài khoản</h1> -->

                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>
                <!-- Button to Add Admin -->
                <a href="add-service.php" class="btn btn-primary add " ><i class="fas fa-plus"></i>Thêm dịch vụ</a>
                 <br>
                <!-- <div class="" style="height:50px; border:1px solid gray;"> -->
                <form  class="text-center"action="" method="POST">
            <input class="search" type="search" name="search" placeholder="Tìm kiếm .." >
            <input type="submit" name="submitsearch" value="Search" class="btn btn-secondary btn-search">
            <input type="submit" name="submitall" value="All" class="btn btn-secondary btn-search">
            </form>  
                <!-- </div> -->
                <br>

                <!-- <br /><br /><br /> -->

                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên dịch vụ</th>
                        <th scope="col">Giá dịch vụ</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Miêu tả</th>
                        <th scope="col">Sửa đổi</th>
                        <th scope="col">Xóa </th>

                    </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($_POST['submitsearch'])){
                    $search= $_POST['search'];
                     // câu truy vấn lấy dữ liệu từ bảng 
                  $sql = "SELECT * FROM tbl_service WHERE ten_dv LIKE '%$search%'OR gia_dv LIKE '%$search%'OR mieu_tadv LIKE '%$search%'" ;
                 }
               elseif(empty($_POST['submitsearch'])||isset($_POST['submitall'])){
                $sql = "SELECT * FROM tbl_service";
            }
                     //tạo truy vấn
                    // thực thi truy vấn 
                        $res = mysqli_query($conn, $sql);
                    // đếm dòng 
                        $count = mysqli_num_rows($res);
                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have food in Database
                            //Get the Foods from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['dv_id'];
                                $ten = $row['ten_dv'];
                                $gia = $row['gia_dv'];
                                $anh = $row['anh'];
                                $mieuta = $row['mieu_tadv'];
                             
                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $ten; ?></td>
                                    <td><?php echo $gia; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($anh=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "<div class='error'>Ảnh chưa được thêm</div>";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="../images/service/<?php echo $anh; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $mieuta; ?></td>
                                    <td>
                                        <a href="update-service.php?id=<?php echo $id; ?>" ><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td>
                                    <a href="delete-service.php?id=<?php echo $id; ?>&anh=<?php echo $anh; ?>"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Food not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Dịch vụ chưa được thêm </td> </tr>";
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