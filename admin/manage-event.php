<?php ob_start();
  include('partials/header.php');

  $user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
// echo $user;
  if(empty($user)){
  header("location:login.php");}

   if(isset($_GET['search']) && !empty($_GET['search'])){
    $keyword=$_GET['search'];
    $sql="SELECT * FROM tbl_news WHERE tintuc_id LIKE '%$keyword%'OR ten_tin LIKE '%$keyword%'OR ngay LIKE '%$keyword%'";
}else{
    $sql = "SELECT tintuc_id,ten_tin,mieu_tatin,ngay,anh FROM tbl_news";
    }
$result=mysqli_query($conn,$sql);
if(!$result){
    die("Câu truy vấn sai!");
} ?>
<style>
   
    h1{
        font-weight: 900;
        font-size: 30px;
        color:darkgrey;
        text-align: center;
        position: relative;
    }
   
    input{
       font-family: sans-serif;
       font-size: 20px;
       border: none;
    }
    input:hover{
      background-color: lightgrey;
      border: none;
    }
    
    .icon{
        color:gray;
        font-size: 15px;
    }
   th{
       background-color: black;
       color: white;
   }
 

   
</style>
    
    <main class="container">
       
        <h1>Quản lý sự kiện</h1>
        <a href="addnews.php" class="btn btn-secondary text-white"><i class="fas fa-user-plus"></i> Thêm Tin Tức</a>
        <table class="find" align="right">
            <thead>
                <tr>
                <td>
                <div  >
            <form action="" method="get">
            <input type="text" placeholder="Nhập từ khóa cần tìm  " name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
            <input type="submit"  class="btn btn-secondary text-white" value="Tìm kiếm"  >
            <input type="button" class="btn btn-secondary text-white" value="Tất cả" onclick="window.location.href='/BTL_HT/BTL/admin/manage-event.php'">
            </form>
                </div> 
                </td>
                </tr>
            </thead>
          
        </table>
    
    <table class="table table-striped table-white">
    <thead>
    <tr>
    <th scope="col">STT</th>
    <th scope="col">Tên tin</th>
    <th scope="col">Miêu tả</th>
    <th scope="col"> Ngày diễn ra sự kiện</th>
    <th scope="col">Ảnh sự kiện</th>
    <th scope="col">Hành động</th>
                    
    </tr>
  </thead>
  <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                   
                   
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['tintuc_id'].'</th>';
                            echo '<td>'.$row['ten_tin'].'</td>';
                            echo '<td>'.$row['mieu_tatin'].'</td>';
                            echo '<td>'.$row['ngay'].'</td>';
                            echo '<td><img style="width: 80px;" src="../images/'.$row['anh'].'"></td>';
                            echo '<td><a href="editnews.php?id='.$row['tintuc_id'].'"><i class="fas fa-user-edit icon">EDIT</i></a></td>';
                            echo '<td><a href="deletenews.php?id='.$row['tintuc_id'].'"><i class="fas fa-user-times icon">DELETE</i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
            
    </main>
 <?php  ob_end_flush();
  include('partials/footer.php') ?>