<?php include('partials-front/header.php'); ?>
<main>
<div class="container-fluid">
      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="http://landing.engotheme.com/html/skyline/demo/images/Home-4/slider-1.jpg" style="width:100%">
      </div>
    
      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="http://landing.engotheme.com/html/skyline/demo/images/Home-3/Slider-v3.jpg" style="width:100%">
      </div>
    
      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="https://ezcloud.vn/wp-content/uploads/2019/07/4649_abc-1.jpg" style="width:100%">
      </div>
        

        
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
     
     
    <div class="ok">
     <div class="container-fluid div1">

        <!-- start tiêu đề  -->
      <div class="container-fluid">
        <div class="container text-center">
            <h2>Mẫu Phòng</h2>
            <div class="outline ">
            </div>
            <p>Các phòng đều có đầy đủ đồ dùng tiện nghi</p>
         </div>
      </div>
     </div>

      <style>
          .ok{
              margin: 2%;
             
          }
          h2{
            font-size: 36px;
            font-weight: 300;
            font-family: 'Playfair Display', serif;
            opacity:0.8;
        }
        .outline{
            width: 100%;
            height: 25px;
            background-image: url(http://landing.engotheme.com/html/skyline/demo/images/Home-1/icon-our.png);
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 2%;
        }
      </style>


<div class="container-fluid mt-3">
  
    <div class="row">
      <div class="col-sm ">
    
        <div class="card" >
            <center><img class="card-img-top" src="https://alosofa.com/wp-content/uploads/10-hinh-anh-phong-ngu-don-gian-dep-quen-loi-ve-1.jpg" style="width: 100%"></center>
            <div class="card-body">
                <h4>Phòng đơn</h4>
                <h5>$320/PER NIGHT</h5>
                <center><button><a class="nav-link" href="room.php">Xem thêm</a></button></center>
            </div>
         </div>
        </div>
        <div class="col-sm ">
    
            <div class="card">
                <center><img class="card-img-top" src="https://khachsanmyngoc.vn/wp-content/uploads/2019/04/9-1024x683.jpg" style="width: 100%"></center>
                <div class="card-body">
                    <h4>Phòng đôi</h4>
                    <h5>$380/PER NIGHT</h5>
                    <center><button><a class="nav-link" href="room.php">Xem thêm</a></button></center>
                </div>
             </div>
            </div>
            <div class="col-sm ">
    
                <div class="card">
                    <center><img class="card-img-top" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/alexander-design-contemporary-family-room-1555952765.jpg" style="width: 100%"></center>
                    <div class="card-body">
                        <h4>Phòng gia đình</h4>
                        <h5>$480/PER NIGHT</h5>
                        <center><button><a class="nav-link" href="room.php">Xem thêm</a></button></center>
                    </div>
                 </div>
                </div>
                <div class="col-sm ">
    
                    <div class="card" >
                        <center><img class="card-img-top" src="https://acihotel.vn/wp-content/uploads/2020/08/noi-that-resort7.jpg" style="width: 100%"></center>
                        <div class="card-body">
                            <h4>Phòng Luxury</h4>
                            <h5>$520/PER NIGHT</h5>
                            <center><button><a class="nav-link" href="room.php">Xem thêm</a></button></center>
                        </div>
                     </div>
                    </div>
    </div>
    <style>
        h4{
            text-align: center;
            margin-top: -5px;
            font-size: 30px;
            font-weight: 300;
            font-family: 'Playfair Display', serif;
            opacity:0.8;
        
        }
        
        .card:hover{
            transform: scale(1.2);
        
        }
        button {
        transition-duration: 0.4s;
        
        }

        button:hover {
            background-color: #4CAF50;
            color: white;
        }
        h5{
            text-align: center;
            font-size: 20px;
            font-weight: bolder;
            font-family: 'Playfair Display', serif;
            color: rgb(1, 90, 6);

        }
    </style>
    <br>
<style>
    
    .col-sm{
        margin-bottom: 5px;
    }
</style>

<div class="ok">
    <div class="container-fluid div1">

       <!-- start tiêu đề  -->
     <div class="container-fluid">
       <div class="container text-center">
           <h2>Dịch vụ</h2>
           <div class="outline ">
           </div>
           <p>Các dịch vụ tiện ích dành cho khách hàng</p>
        </div>
     </div>
    </div>

<div class="dichvu">
    <div class="container-fluid mt-3">
  
        <div class="row">
          <div class="col-sm ">
        
            <div class="card" >
                <center><img class="card-img-top" src="https://lavenderstudio.com.vn/wp-content/uploads/2018/11/word-image-12.jpeg" style="width: 100%"></center>
                <div class="card-body">
                    <h4>Massage</h4>
                    <h5>$30/Hour</h5>
                    <center><button><a class="nav-link" href="service.php">Xem thêm</a></button></center>
                </div>
             </div>
            </div>
            <div class="col-sm ">
        
                <div class="card" >
                    <center><img class="card-img-top" src="https://huonganhyoga.vn/Data/upload/images/News/kinh-nghiem-kien-thuc-fitness/phomng-tap-gym-ha-noi.jpg" style="width: 100%"></center>
                    <div class="card-body">
                        <h4>Gym</h4>
                        <h5>$20/Hour</h5>
                        <center><button><a class="nav-link" href="service.php">Xem thêm</a></button></center>
                    </div>
                 </div>
                </div>
                <div class="col-sm ">
        
                    <div class="card" >
                        <center><img class="card-img-top" src="https://img.lovepik.com/photo/50125/9629.jpg_wh860.jpg" style="width: 100%"></center>
                        <div class="card-body">
                            <h4>Hồ bơi</h4>
                            <h5>$30/Hour</h5>
                            <center><button><a class="nav-link" href="service.php">Xem thêm</a></button></center>
                        </div>
                     </div>
                    </div>
                    <div class="col-sm ">
        
                    <div class="card" >
                        <center><img class="card-img-top" src="https://chupanhmonan.com/wp-content/uploads/2019/03/ma%CC%82%CC%83u-thie%CC%82%CC%81t-ke%CC%82%CC%81-nha%CC%80-ha%CC%80ng-%C4%91e%CC%A3p.jpg" style="width: 100%"></center>
                        <div class="card-body">
                                <h4>Nhà hàng</h4>
                                <h5>$60$/Slot</h5>
                                <center><button><a class="nav-link" href="service.php">Xem thêm</a></button></center>
                        </div>
                    </div>
                    </div>
        </div>
    </div>
</main>
 <?php include('blogs.php'); ?> 
<?php include('partials-front/footer.php'); ?>
