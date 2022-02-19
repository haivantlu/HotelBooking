<?php include('config/constants.php');?>

<html>
    <head>
        <title>Signup-user</title>
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
	background: url(images/signup.jpg) no-repeat;
	background-size: cover;
    background-position: center;
	width: 100%;
	height: 100%;
}
.row-container {
	border: 1px solid #fff;
	border-radius: 20px;
	/* margin-top: 6vh;  */
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
h1{
    padding-top:2%;
}

</style> 
   
    </head>

    <body>
            <!-- Login Form Starts HEre --> 
           
            <div class="container-fluid bg">
            <!-- <h1 class="text-center ">WELCOME TO OUR HOTEL!</h1> -->
        <div class="row justify-content-center">
       
        <div class="col-md-4 col-sm-6 col-xs-12 row-container">
       
          <form action="register_submit.php" method="POST">
            <h1>Đăng ký </h1>
            <?php 
                    if(isset($_SESSION['notmatch']))
                    {
                        echo $_SESSION['notmatch'];
                        unset($_SESSION['notmatch']);
                    }

                    if(isset($_SESSION['notenter']))
                    {
                        echo $_SESSION['notenter'];
                        unset($_SESSION['notenter']);
                    }
                    if(isset($_SESSION['tontai']))
                    {
                        echo $_SESSION['tontai'];
                        unset($_SESSION['tontai']);
                    }
                    ?>
                    
            <div class="form-group">
              <label for="username">Tên người dùng:</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
              
            </div>
            <div class="form-group">
              <label for="email" class="label">Email:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">            
              <p class="emailError"></p>
            </div>
            <div class="form-group">
              <label for="number" class="label">Số điện thoại:</label>
              <input type="text" class="form-control" name="number" id="number" placeholder="Enter number!">            
              <p class="numberError"></p>
            </div>
            <div class="form-group">
              <label for="password" class="label">Mật khẩu:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">            
              <p class="passwordError"></p>
            </div>
            <div class="form-group">
              <label for="repassword" class="label">Nhập lại mật khẩu:</label>
              <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Repassword">            
              <p class="passwordError"></p>
            </div>
            <button  type="submit" name="submit" class="btn btn-success btn-block my-3">Đăng ký</button>
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


    
    

    
