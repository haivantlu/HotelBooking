
<style>
    
    .col-sm-3{
        border-radius: 5px;
        height: 40%;
        border: 3px solid lightgray;
        margin-top:10%;
        margin: 4%;
        margin-left:none;
        padding: 3%;
    }
    .clearfix{
     clear:both;
     float:none;
    }
    .doc{
        width:45%;
        border: none;
        background: gray;
        color: white;
        border-radius: 5px;
        padding: 4%;
        /* margin: 2%; */
    }
  
   .t{
font-size: 20px;
font-family: monospace;
font-weight: 200;
      
   }
</style>

<div class="container-fluid">
<h2 class="text-center" >Sự kiện - Bảng tin</h2>
<div class="outline ">
  <div class="row">
  <?php 
  
   

               $conn = mysqli_connect('localhost','root', '','ht');
                  if(!$conn){
                   die('Không thể kết nối');
                  }

                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_news";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $tintuc_id = $row['tintuc_id'];
                        $ten_tin = $row['ten_tin'];
                        $mieu_tatin = $row['mieu_tatin'];
                        $ngay = $row['ngay'];
                        $anh= $row['anh'];
                        ?>
                        <div class="col-sm-3">
                         <h3><?php echo $ngay;?></h3>
                         <hr class="line2">
                        <p class="t"><?php echo $ten_tin;?></p>
                        <hr class="line2">
                        <p class="t"><?php echo $mieu_tatin;?></p>
                        <hr class="line2">
                        <img src="images/<?php echo $anh;  ?>" style=" width:200px;height:150px; padding-bottom:3%" alt="" srcset="">
                        <button class="doc" ><a class="text-light" href="blog.php">ĐỌC THÊM</a></button>
                        </div>
                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Trang chủ không thể thêm .</div>";
                }
            ?>
  <div class="clearfix"></div>
    

