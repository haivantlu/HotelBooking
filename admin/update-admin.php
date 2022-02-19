<?php 
ob_start();
include('partials/header.php'); ?>
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-xs-12 row-container">
             <div class="bg-white border border-muted px-0  mt-1" > 
                <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
                    <h6>Sửa tài khoản</h6>
                </nav>
        
                    <br>
             
                <?php 
                $conn = mysqli_connect('localhost','root', '','ht');
                if(!$conn){
                    die('Không thể kết nối');
                }
            //1. Get the ID of Selected Admin
            $id=$_GET['id'];
            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_admin WHERE admin_id=$id";
            //Execute the Query

            $res=mysqli_query($conn, $sql);
        //    var_dump($res);
            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);
                    $username = $row['username'];
                    $email=$row['email'];
                    $sdt = $row['sdt'];
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header("location:admin/manage-admin.php");
                }
            }
        
        ?>
            <form action="" method="POST" class="">
            <div class="px-3">
                  <br>
                <div class="form-group ">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email"value="<?php echo $email;?>" >
                </div>

                <div class="form-group ">
                    <label for="number">Số điện thoại:</label>
                    <input type="text" class="form-control" name="number" id="number" value="<?php echo $sdt;?>" >
                </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input  type="submit" name="submit" value="Cập nhật" class="btn btn-secondary my-3">
                </div>

        </form>
        
        </div>
    </div>
   </div>
</div>

<?php include('partials/footer.php'); ?>

<?php 

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        // $usename = $_POST['username'];
        $email = $_POST['email'];
        $sdt = $_POST['number'];
        $sql2 = "UPDATE tbl_admin SET
        -- username = '$username',
        sdt='$sdt',
        email = '$email' 
        WHERE admin_id='$id'
        ";
        //thưc thi truy van
        $res = mysqli_query($conn, $sql2);
//lay du lieu thanh cong
        if($res==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Cập nhật thành công</div>";
            //Redirect to Manage Admin Page
            header("location:manage-admin.php");
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>cập nhật thất bại.</div>";
            //Redirect to Manage Admin Page
            header("location:manage-admin.php");
        }
    }
    ob_end_flush();
?>
