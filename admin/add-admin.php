<?php
ob_start();
  include('partials/header.php'); ?>
<style>
    .input-container{
        display: flex;
    }
    .icon {
  padding: 10px;
  background:#808e9b;
  color: white;
  min-width: 50px;
  text-align: center;
}
</style>
<div class="row justify-content-center">
    <div class="col-md-4 col-sm-6 col-xs-12 row-container">
    <div class="bg-white border border-muted px-0  mt-1" > 
         <nav class="navbar bg-info navbar-dark text-light rounded-top " id="nav" style="height: 2.5rem;">
         <h6>Thêm tài khoản admin</h6>
         </nav>
        <br>
        <?php 
            if(isset($_SESSION['add'])) 
            {
                echo $_SESSION['add']; 
                unset($_SESSION['add']);
            }
           
            if(isset($_SESSION['fail-pass'])) 
            {
                echo $_SESSION['fail-pass']; 
                unset($_SESSION['fail-pass']); 
            }
            if(isset($_SESSION['tontai'])) 
            {
                echo $_SESSION['tontai']; 
                unset($_SESSION['tontai']); 
            }
        ?>
                    <form action="" method="POST" class="">
                        <div class="px-3">
                            <!-- <br> -->
                        <div class="form-group ">
                        <label for="username">Tên tài khoản:</label>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" class="form-control" name="username" id="username" >
                        </div>

                        <div class="form-group ">
                        <label for="email" class="label">Email:</label>
                        <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" class="form-control" name="email" id="email">            
                        </div>
                        </div>

                        <div class="form-group ">
                        <label for="number" class="label">Số điện thoại:</label>
                        <div class="input-container">
                        <i class="fas fa-phone-alt icon"></i>
                        <input type="text" class="form-control" name="number" id="number" >            
                        </div>
                         </div>  

                        <div class="form-group ">
                        <label for="password" class="label">Mật khẩu:</label>
                        <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input type="password" class="form-control" name="password" id="password" >            
                        </div>
                        <div>

                        <div class="form-group ">
                        <label for="repassword" class="label">Nhập lại mật khẩu:</label>
                        <div class="input-container">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" class="form-control" name="repassword" id="repassword">            
                        </div>
                        </div>

                        <button  type="submit" name="submit" class="btn btn-success my-3 "> <i class="fa fa-spinner fa-spin"></i>Đăng ký</button>
                        </div>
                    </form>
        </div>
    </div>
        </div>
</div>
 
<?php  include('partials/footer.php'); ?>
<?php 
//  $err=[];
 if( isset($_POST['submit']) &&$_POST['username']!='' &&$_POST['email']!='' &&$_POST['number']!='' && $_POST['password']!='' && $_POST['repassword']!='')
 {
       $username = $_POST['username'];
       $useremail = $_POST['email'];
       $usernumber = $_POST['number'];
       $password = $_POST['password'];
       $repassword = $_POST['repassword'];
       $sql="SELECT * FROM tbl_admin WHERE username='$username'";
       $res=mysqli_query($conn,$sql);
       if($password!=$repassword){
           header("location:add-admin.php");
           $_SESSION['fail-pass']="<div class='text-danger text-center'>Nhập lại mật khẩu không đúng</div>";
       }
       elseif(mysqli_num_rows($res)>0){
        header("location:add-admin.php");
        $_SESSION['tontai']="<div class='text-danger text-center'>Tài khoản đã tồn tại!</div>";
       }
        else{
            $password=md5($_POST['password']);
        //   $password =password_hash($password,PASSWORD_DEFAULT);
           $sql2= "INSERT INTO tbl_admin(username,sdt,email,password) VALUES('$username','$usernumber','$useremail','$password')";
        //    echo $sql2;
           mysqli_query($conn,$sql2);
            // echo"hello";
           header("location:manage-admin.php");
        }
      
   }   
  
   ob_end_flush();
?>