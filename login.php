

<?php include('config/constants.php');

?>

<html>
    <head>
        <title>Login -user</title>
        <!-- <link rel="stylesheet" href="../css/admin.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">        
    <!-- My CSS and JQuery -->
   <style>
       @import url('https://fonts.googleapis.com/css?family=Raleway');
    html, body {
	width: 100%;
	height: 100%;
	font-family: 'Raleway';
	font-size: 16px;	
	font-weight: bold;
    }
.bg {
	background: url(images/loginuser.jpg) no-repeat;
	background-size: cover;
    background-position: center;
	width: 100%;
	height: 110%;
}
.row-container {
	border: 1px solid #fff;
	border-radius: 20px;
	margin-top: 17vh; 
	padding: 30px;
	-webkit-box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75);
	box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75);
   
}
label, .form-check-label, h1 ,p{
	color: white;	
	text-shadow: 2px 2px 10px #000;
}
p{
    float:left;
}
a{
    font-weight: bold;
    font-size: 18px;
    color:white;
}
.emailError, .passwordError {
	color: red;
	background-color: blanchedalmond;
	padding-left: 10px;
	border-radius: 4px;
	margin-top: 1px;
}
.clearfix{
    clear: both;
    float:none;
}

   </style> 
    </head>

    <body>
        
        <!-- <div class="login"> -->
            <!-- <h1 class="text-center">Login</h1> -->
            <!-- <br><br> -->

            

            <!-- Login Form Starts HEre -->
        
            <div class="container-fluid bg">
              
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-xs-12 row-container">
      
            <br><br>
          <form action="" method="POST">
            <h1>Đăng nhập </h1>
            <?php 
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
                if(isset($_SESSION['login-message']))
                {
                    echo $_SESSION['login-message'];
                    unset($_SESSION['login-message']);
                }
            ?>
            <div class="form-group">
              <label for="username">Tên người dùng:</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
              <p class="userError"></p>
            </div>
            <div class="form-group">
              <label for="password" class="label">Mật khẩu:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">            
              <p class="passwordError"></p>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me?</label>
            </div>   
            <button type="submit" name="submit" class="btn btn-success btn-block my-3">Login</button>
              <p>Bạn chưa có tài khoản?</p>  <a class="text-center" href="signup.php"> Đăng ký</a>
               <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>

            <!-- Login Form Ends HEre -->
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
<?php
//kiem tra nguoi dung an submit
if(isset($_POST['submit']) && $_POST['username']!='' && $_POST['password']!='')
{
    $username=$_POST['username'];
    $password = $_POST['password'];
    // $password = mysqli_real_escape_string($conn, $raw_password);
    //2. SQL to check whether the user with username and password exists or not
    $sql2 = "SELECT * FROM tbl_user WHERE username='$username'";
    $res = mysqli_query($conn, $sql2);
    $data = mysqli_fetch_assoc($res);
    //  echo $data;
    //4. COunt rows to check whether the user exists or not
    $count = mysqli_num_rows($res);
    //  echo $count;
    if($count==1)
    {
      $checkpass = password_verify($password,$data['password']);
      if($checkpass){
        $_SESSION['user'] = $data; 
        //  echo $_SESSION['user'];
        header('location:index.php');
      }
    else
    {
        header('location:login.php');
        $_SESSION['no-login-message'] = "<div class='text-warning'>Tên đăng nhập hoặc mật khẩu không đúng</div>";
    }
  } else{
    header('location:login.php');
    $_SESSION['login-message']='<div class="text-warning">Bạn chưa nhập đủ thông tin !!!</div>';
  }

}



?>