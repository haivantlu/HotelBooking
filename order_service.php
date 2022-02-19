<?php  
include('config/constants.php');
include('partials-front/header.php');
$user=(isset($_SESSION['user'])) ? $_SESSION['user']:[];
// $room=(isset($_SESSION['room'])) ? $_SESSION['room']:[];
$dv_id=$_GET['dv_id'];

// die;
$sql="SELECT * FROM tbl_service WHERE dv_id=$dv_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);


// echo $room;

?>
<style>
  .container{
    margin-left: 30%;
  }
  .btn {
    margin-left: 37%;
    width: 120px;
    padding :2%;
    margin-bottom: 2%;
  }

</style>

<div class="container">
  <button>hel</button>
<form action="process-dv.php" method="post">

  <h2>Card Image</h2>

  <div class="card" style="width:400px">
    <img class="card-img-top" src="images/service/<?php echo $row['anh'] ?>" alt="Card image" style="width:100%">

    <h3 class="text-center">Đặt dịch vụ</h3>
    <input id = "dv-id" name = "dv_id" value = "<?php echo $dv_id;?>" hidden >
 
    <div class="card-body">
      <h4 class="card-title"><?php echo $row['ten_dv']; ?></h4>
<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0"> Giá: </p>
      </div>
      <div class="col-md-9 ">
      <input type="number" readonly class="form-control " id="gia_dv" name="gia_dv" value="<?php echo $row['gia_dv']; ?>">
<!-- </div> -->
</div>
</div>

<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0">Từ ngày: </p>
      </div>
      <div class="col-md-9 ">
      <input type="date" class="form-control px-3" id="date_den" name="date_den" required>
</div>
</div>

<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0">Đến ngày: </p>
      </div>
      <div class="col-md-9 ">
      <input type="date" class="form-control px-3" id="date_di" name="date_di" onchange = "myFunction()" required>
</div>
</div>
<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0">Số ngày: </p>
      </div>
      <div class="col-md-9 ">
      <input type="number" readonly class="form-control px-3" id="ngay" name="ngay">
</div>
</div>
<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0">Tổng tiền: </p>
      </div>
      <div class="col-md-9 ">
      <input type="number " readonly class="form-control px-3" id="tong_tien" name="tong_tien">
</div>
</div>
</div>
       

<div class="row">  
  <div class="col-md-3  pr-0">
      <p class="mx-0"></p>
      </div>
      <div class="col-md-9 ">

  <script >
    function myFunction() {

        var t1 = new Date(document.getElementById("date_den").value);
        var t2 = new Date(document.getElementById("date_di").value);
        var tong = (t2.getTime() - t1.getTime())/(1000*3600*24);
        document.getElementById("ngay").value = tong;
        var day = document.getElementById("ngay").value;
        var price = document.getElementById("gia_dv").value;
        document.getElementById("tong_tien").value = price*day ;
    };
</script>
<!-- <input type="submit"   name="submitsearch" value="Search" class="btn btn-info btn-search"> -->
</div>
</div>
<div>
<!-- <input type="submit"  enable name="submitsearch" value="Search" class="btn btn-info btn-search"> -->

</div>    
<!-- <input type="submit"   name="submitsearch" value="Search" class="btn btn-info btn-search"> -->
           
<button class = "btn"  style = "background-color:#b8ab8147" id = "confirm"><h6 class = "mt-2">Xác nhận đặt</h6></button>
    </div>
    </form>
</div>
  </div>


  
  </body>
  </html>