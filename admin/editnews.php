<?php
 include '../config/constants.php';


$id = $_GET['id'];

$sql = "SELECT * from tbl_news where tintuc_id = $id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $ten_tin = $row['ten_tin'];
        $mieu_tatin = $row['mieu_tatin'];
        $ngay = $row['ngay'];
        $file_name= $row['anh'];

        }
}


?>
<style>
    main{
        text-align:center;
        position: relative;
        
    }
    h2{
        font-weight: 900;
        font-size: 30px;
        color:white;
        text-align: center;
        width: 80%;
        height: 5%;
        background: #00BFFF;
        padding: 1%;
        margin-left: 10%;
        font-family: monospace;
      

    }
   
        input{
        
        border:2px solid gray ;
        width: 70%;
        height: 7%;
        border-radius: 5px;
        font-size: 20px;
    
    }
    input:hover{
        background: lightblue;
    }
    label{
        
        font-family:monospace;
        font-size: 30px;
        color: white;
    }
    
    .save{
      
        margin-top: 1%;
        width: 15%;
        height: 10%;
        margin-bottom: 10px;
        background-color: lightgrey;
        color:black;
        border: none;
        border-radius: 5px;
        font-family: sans-serif;
        font-size: 20px;
    }
    .bd{
      
        border:2px solid gray ;
        width: 30%;
        height: 7%;
        border-radius: 5px;
        font-size: 20px;
       
    }
    .line2{
        width: 130px;
    }
    .form-group{
        width: 50%;
        margin-left:25% ;
        background-color: gray;
     
    }
    .ha{
        color:darkgray;
        background: white;
    }
</style>
<main>
    <div class="container">
    
        <form action = "process-editnews.php"  class="hello" method="POST">
            <div class="form-group">
            <h2>Cập nhật thông tin của sự kiện</h2>
            <input type="text" class="form-control bd" name='id' value = "<?php echo $id ?>">
            <div class="mb-3">
            <hr class="line2">
                <label for="ten_tin" class="form-label">Tên tin:</label><br>
                <input type="text" class="form-control" name='ten_tin' value = "<?php echo $ten_tin; ?>">
            </div>
            <div class="mb-3">
                <hr class="line2">
                <label for="mieu_ta" class="form-label">Miêu tả:</label><br>
                <input type="text"  class="form-control" name = "mieu_tatin" value = "<?php echo $mieu_tatin; ?>">
            </div>
            <div class="mb-3">
            <hr class="line2">
                <label for="ngay" class="form-label">Ngày diễn ra sự kiện :</label><br>
                <input type="date" class="form-control" name="ngay" value = "<?php echo $ngay; ?>">
            </div>
            <div class="mb-3">
            <hr class="line2">
                <label for="anh" class="form-label">Ảnh sự kiện:</label><br>
                <input type="file" class="form-control ha" name="anh" value = "<?php echo $file_name; ?>">
            </div>
            <div class="mb-3">
            <hr class="line2">
            <button type="submit" class="save">Lưu lại</button>
            </div>
            </div>
        </form>
    </div>
</main>
