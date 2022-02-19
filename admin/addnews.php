<?php
     include '../config/constants.php';
?>
<style>
    main{
    margin-left:20% ;
    }
   label{
       font-family: monospace;
       font-size: 20px;
       color:white

   }
    h2{
       background: 	#00BFFF;
       padding:2% ;
       font-family: monospace;
       text-align: center;
       color: white;
   }
    .form-control{
        width: 93%;
        height: 6%;
        border-radius: 5px;
      
    }
    .form-group{
        margin-left: 7%;
        padding:14px ;
        background: gray;
        
    }
    .hello{
        width: 50%;
      
        margin-left: 10%;
    }
    button{
        text-align: center;
        margin-left: 40%;
        color: white;
        background: darkgray;
        padding: 3%;
        border-radius: 5px;
        border: none;
        font-size: 20px;
        font-family:monospace;

    }
   .ha{
       color: gray;
       background-color: white;
       font-size: 15px;
   }
</style>
    <main class="container">
      
        <form action="process-addnews.php" method="post" class="hello" enctype="multipart/form-data">
      
            <div class="form-group row">
               <h2 class="form-control" >Thêm thông tin của sự kiện</h2>
                <label for="ten_tin" class="col-sm-2 col-form-label">Tên tin:</label>
                <hr class="line2">
                <div class="col-sm-10">
                <input type="text" class="form-control" id="ten_tin" name="ten_tin" >
                </div>
            </div>
            <div class="form-group row">
           
                <label for="mieu_tatin" class="col-sm-2 col-form-label">Miêu tả:</label>
                <hr class="line2">
             
                <div class="col-sm-10">
                <input type="text" class="form-control mt" id="mieu_tatin" name="mieu_tatin"></input>
           
                </div>
            </div>
            <div class="form-group row">
           
                <label for="ngay" class="col-sm-2 col-form-label"> Ngày diễn ra sự kiện:</label>
                <hr class="line2">
                <div class="col-sm-10">
                <input type="date" class="form-control" id="ngay" name="ngay">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="anh" class="col-sm-2 col-form-label">Ảnh sự kiện :</label>
                <hr class="line2">
                <div class="col-sm-10">
                <input type="file" class="form-control ha" id="anh" name="anh">
                
                </div>
            </div>
            <div class="form-group row">
                <label for="save" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-secondary text-white">Lưu lại</button>
                </div>
            </div>
         
        </form>
        
        </div>
    </main>
    