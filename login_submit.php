<?php 
  include'config/constants.php';
//CHeck whether the Submit Button is Clicked or NOt
if(isset($_POST['submit']) && $_POST['username']!='' && $_POST['password'])
{
    $username=$_POST['username'];
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);


    //2. SQL to check whether the user with username and password exists or not
    $sql2 = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    echo $sql2;
    //3. Execute the Query
    $res = mysqli_query($conn, $sql2);

    //4. COunt rows to check whether the user exists or not
    $count = mysqli_num_rows($res);
    //  echo $count;
    if($count==1)
    {
        //User AVailable and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

        //REdirect to HOme Page/Dashboard
        header('location:index.php');

    }
    else
    {
        //User not Available and Login FAil
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        //REdirect to HOme Page/Dashboard
        header('location:login.php');
    }


}

?>