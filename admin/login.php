
<?php  include('../config/constants.php') ?>
<html>
    <head>
        <title>Login -admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">        
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
	background: url(images/adminlogin.jpg) no-repeat;
	background-size: cover;
    background-position: center;
	width: 100%;
	height: 100%;
}
.row-container {
	border: 1px solid #fff;
	border-radius: 20px;
	margin-top: 17vh; 
	padding: 30px;
	/* -webkit-box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75); */
	/* box-shadow: 0px 1px 22px 5px rgba(0,0,0,0.75); */
   
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
.row-container{
    background-color:#485460;
}
img{
   position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
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
            <!-- Login Form Starts HEre -->
        
            <div class="container-fluid bg">
              
        <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-xs-12 row-container">
       
            <br><br>
          <form action="" method="POST">
              <img src="images/avatar.png" alt="" srcset="">
            <h1>Đăng nhập quản lý </h1>
            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <div class="form-group">
              <label for="username">Tên tài khoản:</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
              <p class="userError"></p>
            </div>
            <div class="form-group">
              <label for="password" class="label">Mật khẩu:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">            
              <p class="passwordError"></p>
            </div>
            
            <button type="submit" name="submit" class="btn btn-success btn-block my-3">Đăng nhập</button>
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

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        // $username = $_POST['username'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        // $raw_password = md5($_POST['password']);
         $password=md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['user'] = $username; 
         
            $_SESSION['login'] = "<div class='text-success text-center'>Đăng nhập thành công.</div>";

            header("location:index.php");
        }
        else
        {
            $_SESSION['no-login-message'] = "<div class='error text-center'>Tài khoản hoặc mật khẩu không đúng</div>";
            header("location:login.php");
        }


    }

?>

    
    

    

