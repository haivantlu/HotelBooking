<?php 
include('partials-front/header.php') ;
$user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
$user_id = $user['user_id'];

?>
<style>
  table{
     border: 1px solid gray;
  }
    .tb1{
      margin-top: 10%;
      float: left;
      text-align: center;
      font-weight: bold;
      font-size: 17px;
      /* padding: 10px; */
    }
    .tb{
      float: right;
      margin-top: 10%;
      margin-right: 0px;
      text-align: center;
      font-weight: bold;
      font-size: 17px;

    }
</style>
<div class="tb1 col-md-6">
<table  class="table table-hover">
   <thead class="thead-dark">
      <tr>
         <th>Mã đơn hàng</th>
         <th>Tên phòng</th>
         <th>Từ ngày</th>
         <th>Đến ngày</th>
         <th>Tổng</th>
         <th>Tình trạng</th>
      </tr>
   </thead>
   <tbody>
   <?php 
                    //    qui trình 4 bước 


                        $sql = "SELECT r.book_id, t.ten_phong, r.date_den, r.date_di , r.tong_tien, r.tinh_trang FROM tbl_room t,  tbl_oder_room r WHERE r.user_id = $user_id AND r.room_id=t.room_id";
                        //Execute the Query
                        $result = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if(mysqli_num_rows($result)>0)
                        {
                          while($rows=mysqli_fetch_assoc($result))
                                {
                                echo '<tr>';
                                echo '<th scope="row">'.$rows['book_id'].'</th>';
                                echo '<td>'.$rows['ten_phong'].'</td>';
                                echo '<td>'.$rows['date_den'].'</td>';
                                echo '<td>'.$rows['date_di'].'</td>';
                                echo '<td>'.$rows['tong_tien'].'</td>';
                                echo '<td>'.$rows['tinh_trang'].'</td>';
                                echo '</tr>';
                                }
                        }
                    
                       ?>

   </tbody>
</table>
</div>
<!-- Bangr dịch vụ -->

<div class="tb col-md-6 ">
<table class="table table-hover ">
   <thead class="thead-dark">
      <tr>
         <th>Mã dịch vụ</th>
         <th>Tên dịch vụ</th>
         <th>Từ ngày</th>
         <th>Đến ngày</th>
         <th>Tổng tiền</th>
         <th>Tình trạng</th>
      </tr>
   </thead>
   <tbody>
   <?php 
                    //    qui trình 4 bước 


                        $sql = "SELECT r.bs_id, t.ten_dv, r.date_den, r.date_di , r.tong_tien, r.tinh_trang FROM tbl_service t,  tbl_order_services r WHERE r.user_id = $user_id AND r.dv_id=t.dv_id";
                        //Execute the Query
                        $result = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if(mysqli_num_rows($result)>0)
                        {
                          while($rows=mysqli_fetch_assoc($result))
                                {
                                echo '<tr>';
                                echo '<th scope="row">'.$rows['bs_id'].'</th>';
                                echo '<td>'.$rows['ten_dv'].'</td>';
                                echo '<td>'.$rows['date_den'].'</td>';
                                echo '<td>'.$rows['date_di'].'</td>';
                                echo '<td>'.$rows['tong_tien'].'</td>';
                                echo '<td>'.$rows['tinh_trang'].'</td>';
                                echo '</tr>';
                                }
                        }
                    
                       ?>

   </tbody>
</table>
</div>