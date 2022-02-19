<?php 
ob_start();
include('partials/header.php'); ?>
<style>
    .error{
        color: red;
    }
</style>
    <div class="row justify-content-center">
         <div class="col-md-4 col-sm-6 col-xs-12 row-container">
             <div class="bg-white border border-muted px-0  mt-1" > 
                <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
                    <h6>Thay đổi mật khẩu</h6>
                </nav>
        <br>

        <?php 
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
            if(isset($_SESSION['check-empty'])){
                echo $_SESSION['check-empty'];
                unset($_SESSION['check-empty']);
            }
        ?>
       
        <form action="" method="POST" class="mb-3">
        <div class="px-3 ">
                  <br>
          <div class="form-group ">
             <label for="username">Mật khẩu hiện tại:</label>
             <input type="password" class="form-control" name="current_password" id="current_password">
          </div>

          <div class="form-group ">
             <label for="username">Mật khẩu mới:</label>
             <input type="password" class="form-control" name="new_password" id="new_password" >
          </div>

          <div class="form-group ">
             <label for="username">Xác nhận mật khẩu:</label>
             <input type="password" class="form-control" name="confirm_password" id="confirm_password" >
          </div>
             <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input  type="submit" name="submit" value="Thay đổi" class="btn btn-secondary my-3">
        </div>

        </form>
        </div>
        </div>
        </div>
    </div>
<?php include('partials/footer.php') ?>
<?php 

            if(isset($_POST['submit'])&& $_POST['current_password']!='' &&$_POST['new_password']!='' &&$_POST['confirm_password']!='')
            {
                $id=$_POST['id'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);

                //2. kiểm tra id và mật khẩu tồn tại chưa
                $sql = "SELECT * FROM tbl_admin WHERE admin_id=$id AND password='$current_password'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                if($res==true)
                {
                    $count=mysqli_num_rows($res);

                    if($count==1)
                    {
                        // tài khoản tồn tại và pass có thể thay đổi
                        if($new_password==$confirm_password)
                        {
                            $sql2 = "UPDATE tbl_admin SET 
                                password='$new_password' 
                                WHERE admin_id=$id
                            ";

                            //Execute the Query
                            $res2 = mysqli_query($conn, $sql2);

                            //kiểm tra câu truy vấn thực thi chưa
                            if($res2==true)
                            {
                                $_SESSION['change-pwd'] = "<div class='text-success'>Thay đổi mật khẩu thành công. </div>";
                                header("location:manage-admin.php");
                            }
                            else
                            {
                                $_SESSION['change-pwd'] = "<div class='error'>Thất bại. </div>";
                                header("location:manage-admin.php");
                            }
                        }
                        else
                        {
                            $_SESSION['pwd-not-match'] = "<div class='error'>Mật khẩu không đúng. </div>";
                            header("location:manage-admin.php");

                        }
                    }
                    else
                    {
                        //tài khoản không tôn tại
                        $_SESSION['user-not-found'] = "<div class='error'>Không tìm thấy người dùng. </div>";
                        header("location:manage-admin.php");
                    }
                }

            }
            else{
                $_SESSION['check-empty']="<div class='error text-center'>Vui lòng điền thông tin</div>";
            }
            ob_end_flush();
?>


