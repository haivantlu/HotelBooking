<?php
  include 'config/constants.php';
  $err=[];
  if( isset($_POST['submit']) &&$_POST['username']!='' &&$_POST['email']!='' &&$_POST['number']!='' && $_POST['password']!='' && $_POST['repassword']!='')
  {
        $username = $_POST['username'];
        $useremail = $_POST['email'];
        $usernumber = $_POST['number'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $sql="SELECT * FROM tbl_user WHERE username='$username'";
        $res=mysqli_query($conn,$sql);
        if($password!=$repassword){
            header("location:signup.php");
            $_SESSION['notmatch']="<div class='text-warning'>Nhập lại mật khẩu chưa đúng </div>";
        }
        elseif(mysqli_num_rows($res)>0){
            header("location:signup.php");
            $_SESSION['tontai']="<div class='text-warning'>Tài khoản đã tồn tại! </div>";

        }
         else{
             
           $password =password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO tbl_user(username,password,email,number) VALUES('$username','$password','$useremail','$usernumber')";
            mysqli_query($conn,$sql);
            header("location:login.php");
         }

    }   
    else{
        header("location:signup.php");
        $_SESSION['notenter']="<div class='text-warning'>Bạn chưa nhập đầy đủ thông tin</div>";
        
    }

?>