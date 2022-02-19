<?php

include('partials/header.php');
?>
<div class="content p-3">
    <div>
        <div class="">
            <h1 class="text-center pt-3">Danh sách Đơn phòng</h1>
        </div>
        <div class=" p-3 ">
            <form action="" method ="post">
                    <input type="search"  class="my-2 p-2 border-0 rounded-2 " name ="username" style="width: 300px; background-color:#f1f2f6;" name="Search" placeholder="Tìm kiếm khách...">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="py-2 btn btn-primary  border-0 " style="background-color: gray ">
                    <a href="oder_room.php" style="background-color:gray; color: white;" class="py-2 btn btn-primary border-0">Làm mới</a>
            </form>
        </div>
    </div> 

            <table class="table my-3 py-5 border-light  text-aline table-light text-center" style="table-layout: auto;">
                <thead class="table-light">
                    <tr class =" border-dark">
                        <th scope="col" class="top">Mã Đơn</th>
                        <th scope="col" class="top">Tên Khách </th>
                        <th scope="col" class="top" >Mã phòng</th>
                        <th scope="col" class="top">Tên phòng</th>
                        <th scope="col" class="top">Ngày đến</th>
                        <th scope="col" class="top">Ngày đi</th>
                        <th scope="col" class="top">Tổng tiền</th>
                        <th scope="col" class="top">Tình trạng </th>
                        <th scope="col" class="top">Xác nhận</th>
                        <th scope="col" class="top">Hủy đơn</th>
                    </tr>
                </thead>
                <tbody>
                    <style>
                        .border-dark{
                            background-color: gray;
                            color: white;
                        }
                    </style>

                    <?php
                        //1 .kết nối csdl 
                        
                        //2. Thực hiện truy vấn
                        if (isset($_POST['btn-search'])){
                            $username = $_POST['username'];
                            $sql = "SELECT o.book_id,o.tong_tien,o.date_den,o.date_di,o.tinh_trang,r.ten_phong,r.room_id,c.username
                            FROM  tbl_oder_room o ,tbl_room r ,tbl_user c
                            WHERE  o.room_id = r.room_id AND o.user_id =c.user_id AND c.username ='$username'";
                             $result = mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result)>0){
                                 while($row=mysqli_fetch_assoc($result)){
                                     echo '<tr>';
                                     echo '<th scope="row">'.$row['book_id'].'</th>';
                                     echo '<td>'.$row['username'].'</td>';
                                     echo '<td>'.$row['room_id'].'</td>';
                                     echo '<td>'.$row['ten_phong'].'</td>';
                                     echo '<td>'.$row['date_den'].'</td>';
                                     echo '<td>'.$row['date_di'].'</td>';
                                     echo '<td>'.number_format($row['tong_tien']).' đ</td>';
                                     echo '<td>'.$row['tinh_trang'].'</td>';
                                     if($row['tinh_trang']=='Đã hủy'){
                                        echo '<td><a href =""><i class="fas fa-user-times" style="color:red;"></i></a></td>';
                                    }else{
                                        echo '<td><a href ="confirm-order-room.php?id='.$row['book_id'].'"><i class="fas fa-user-check" style="color:green;"></i></a></td>';
                                    }
                                    echo '<td><a href ="cancel-order-room.php?id='.$row['book_id'].'"><i class="fas fa-user-times" style="color:red;"></i></a></td>';
                                    echo '</tr>';
                                 }
                             }
                        }else{
                            $sql = "SELECT o.book_id,o.tong_tien,o.date_den,o.date_di,o.tinh_trang,r.ten_phong,r.room_id,c.username
                            FROM  tbl_oder_room o ,tbl_room r ,tbl_user c
                            WHERE  o.room_id = r.room_id AND o.user_id = c.user_id";
                            $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo '<tr>';
                                        echo '<th scope="row">'.$row['book_id'].'</th>';
                                        echo '<td>'.$row['username'].'</td>';
                                        echo '<td>'.$row['room_id'].'</td>';
                                        echo '<td>'.$row['ten_phong'].'</td>';
                                        echo '<td>'.$row['date_den'].'</td>';
                                        echo '<td>'.$row['date_di'].'</td>';
                                        echo '<td>'.number_format($row['tong_tien']).' đ</td>';
                                        echo '<td>'.$row['tinh_trang'].'</td>';
                                        if($row['tinh_trang']=='Đã hủy'){
                                            echo '<td><a href =""><i class="fas fa-user-times" style="color:red;"></i></a></td>';
                                        }else{
                                            echo '<td><a href ="confirm-order-room.php?id='.$row['book_id'].'"><i class="fas fa-user-check" style="color:green;"></i></a></td>';
                                        }
                                        echo '<td><a href ="cancel-order-room.php?id='.$row['book_id'].'"><i class="fas fa-user-times" style="color:red;"></i></a></td>';
                                        echo '</tr>';
                                        
                                    }
                                }
                        }
                            mysqli_close($conn);
                    ?>
                
                </tbody>
            </table>
</div>


<?php
    include ('partials/footer.php');
?>