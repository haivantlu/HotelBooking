<?php include('partials-front/header.php'); ?>

    <!-- <title>contact</title> -->
    <style>
        .part{
            margin-top: 7vh;
        }
        ul {
            list-style-type:none;
            padding-left:7%;
        }
        ul li{
            padding-left: 1%;
            color: #8e7037;
            font-size: 17px;
        }
        p{
            margin: 5% 7%;
            font-size: 15px;
            line-height: 1.428em;
            display: block;
            color: #8395a7;
        }
        h2{
            margin-left: 7%;
        }
        .texthead{
            color: white;
            background-color: rgba(6, 6, 6, 0.33);
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            padding-top:10%;
        }
        input,textarea{
            width: 100%;
            margin-top: 2%;
            border: 2px solid black;
            padding: 1%;
        }
        .btn{
            width: 30%;
            color:white;
            background-color: #8395a7;
        }
        form{
            margin-top: 7vh;
        }
        .name{
            padding-left:30px;
        }
        /* main{
            position: relative;
        } */
        /* .head{padding-left:0;padding-right:0 ;} */
    </style>
<main>
    <div class="container-fluid head">
         <div class="texthead pb-2 ">
        <h1 class="text-center">CONTACT US</h1>
        <h6 class="text-center mb-4">Lorem Ipsum is simply dummy text of the printing</h6>
        </div>
        <div class="row">
            <div class="col-md-6 part" >
              <h2>LIÊN HỆ</h2>
              <p class="pl-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries.</p>
                  <ul>
                      <li>
                        <i class="fas fa-map-marker-alt mr-3"></i>
                         Số 8,đường Đỗ Đức Dục ,quận Bắc Từ Liêm,TP Hà Nội
                      </li>
                      <li>
                        <i class="fas fa-phone mr-3"></i>
                        (+84) 866 04 13 84
                      </li>
                      <li>
                        <i class="far fa-envelope mr-3"></i>
                        Marriott@123.com
                      </li>
                  </ul>
            </div>
            <div class="col-md-6 " >
               
                    <form action="" method="POST">
                        <div class="row">
                        <div class="col-sm-6 name">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" placeholder="email">
                        </div>
                       </div>
                       <input type="text" placeholder="Subject"> 
                       <textarea name="" id="" cols="30" rows="10" placeholder="write what you want"></textarea>
                       
                       <button type="submit" name="submit" class="btn btn-infor btn-block my-3">Send</button>

                    </form>
            </div>
        </div>

    </div>
    </main>

    <?php include('partials-front/footer.php'); ?>
