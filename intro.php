<?php include('partials-front/header.php'); ?>

<style>
.row{
    
    position:relative;
   
}
.carousel-item{
  margin-left: 3%;
}
/* .container-fluid{
  position: relative;
} */
.btn{ background: #576574;
    border: 1px solid white;
    text-shadow: 2px 2px 10px #000;
    }
h3{
  color: white;
  text-shadow: 2px 2px 10px #000;
}
    img{
        object-fit: cover;
    }
    .carousel-indicators li {
  width: 20px;
  height: 20px;
  border-radius: 100%;
}
.section__data  {
    background-color:#747d8c;
    padding: 40px 0;
    color: white;
    text-align: center;
    vertical-align: inherit;
    
   
}
.section__data .section-data__nbr {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 0;
    color:white;
    text-shadow: 2px 2px 10px #000;
}
.ten {
  background-image: url(./images/room.jpg);
  background-size: cover;
 margin-top: 70px;
  display:block;
  transition: all .3s ease;
}
.ten:hover{
  transform: scale(1.5);
}
.divider {
    margin: 30px 0;
}
.divider .line1 {
    width: 50px;
}
.divider .line2{
  width: 200px;
}
.divider .line1, .divider .line2 {
    height: 1px;
    background-color: #deaa86;
    margin: 3px auto;
}
.card{
  transition: transform;
}
.card:hover{
    

  transform: scale(1.2);
        
    
}
.card-title{
  color:white;
  /* padding-top:85px; */
  text-shadow: 2px 2px 10px #000;
}
main{
  position: relative;
}

  </style>
<!--header-->
<main>
<div  class=" text-center ten">
  <h1 style="color:white;padding:20px 0;text-shadow: 2px 2px 10px #000;
">WELCOME TO MARRIOTT HOTEL</h1>
  <span style="font-size:40px;color:white;text-shadow: 2px 2px 10px #000;
 ">"Sự hài lòng là phương châm của chúng tôi"</span>
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
<!--phần thân-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-7">
    <div  style="padding-top:10px"; id="anh" class="carousel slide" data-ride="carousel">

<!-- chấm ở dưới ảnh-->
<ul class="carousel-indicators">
  <li data-target="#anh" data-slide-to="0" class="active"></li>
  <li data-target="#anh" data-slide-to="1"></li>
  <li data-target="#anh" data-slide-to="2"></li>
  <li data-target="#anh" data-slide-to="3"></li>
  <li data-target="#anh" data-slide-to="4"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class ="img-fluid" src="./images/truoc.webp" alt="view1" width="740px" height="426px" >
  </div>
  <div class="carousel-item">
    <img class="img-fluid" src="./images/phong.webp" alt="view2" width="740px" height="426px">
  </div>
  <div class="carousel-item">
    <img class="img-fluid" src="./images/hoinghi.webp" alt="view3" width="740px" height="426px" >
  </div>
  <div class="carousel-item">
    <img class="img-fluid" src="./images/letan.webp" alt="view4" width="740px" height="426px" >
  </div>
  <div class="carousel-item">
    <img class="img-fluid" src="./images/sau.webp" alt="view4" width="740px" height="426px" >
  </div>
</div>

<!-- Điều khiển trái phải-->
<a class="carousel-control-prev" href="#anh" data-slide="prev">
  <span  class="carousel-control-prev-icon"></span>
</a>
<a  class="carousel-control-next" href="#anh" data-slide="next">
  <span  class="carousel-control-next-icon"></span>
</a>
</div>
    </div>
    <div class=" col-xs-12 col-md-5">
    
      <h3>ABOUT US  </h3>
      <p>Khách sạn MARRIOTT là một trong những khách sạn 5 sao nổi tiếng tại thành phố Hà Nội . Ở đây các bạn có thể tận hưởng trọn vẹn sự thoải mái và tiện nghi trong suốt quá trình nghỉ dưỡng.Khách sạn có vị trí địa lí thuận lợi cho việc di chuyển đến sân bay và các khu trung tâm thương mại. Khách sạn có tổng cộng 333 phòng dành cho khách tiêu chuẩn và hạng sang. Các phòng được thiết kế đẹp mắt và tinh tế. Mỗi phòng đều có những thiết bị cơ bản như tivi, điều hòa, tủ lạnh, máy sấy tóc,…Không gian tại khách sạn vô cùng sạch sẽ và mát mẻ. Thái độ phục vụ của nhân viên rất nhiệt tình. Tại khách sạn còn có phà hàng và quán cà phê tiện lợi cho nhu cầu của khách đặt phòng.</p>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">LEARN MORE</button>
    <div id="demo" class="collapse">
    Tại đây có có phòng họp và phòng hội nghị lớn có thể chứa đến hơn 1500 người...
     <div id="myCarousel" class="carousel slide border" data-ride="carousel">
     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="./images/gym.jpg">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="./images/song.jpg" >
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="./images/marry.webp" >
      </div>
  </div>
      
      
    </div>
   
    </div>
  </div>
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
<!--Thống kê-->
<div class=" text-center">
  <h1 style="margin-top: 30px;color:gray;margin-bottom:20px;">THỐNG KÊ</h1>
  <section class="section__data">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 ">
                            <p class="section-data__nbr" data-from="0" data-to="1000" data-speed="2560" data-refresh-interval="10">2560</p>
                            <h3 class="section-data__title">Khách Hàng</h3>
                      
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 ">
                       
                            <p class="section-data__nbr" data-from="0" data-to="333" data-speed="1000" data-refresh-interval="5">333</p>
                            <h3 class="section-data__title">Phòng</h3>
                     
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                      
                            <p class="section-data__nbr" data-from="0" data-to="190" data-speed="1000" data-refresh-interval="2">190</p>
                            <h3 class="section-data__title">Giải thưởng</h3>
                      
                      
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                            <p class="section-data__nbr" data-from="0" data-to="4891" data-speed="2000" data-refresh-interval="10">4891</p>
                            <h3 class="section-data__title">Bữa ăn được phục vụ</h3>
                      
                    </div>
                </div>
            </div>
</section>
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
<!--feed-back-->
<div class="text-center">
<div class="container">
  <h2 style="color: gray; margin-top:10px;margin-bottom:20px;">FEEDBACK</h2>
  <div class="container">
                <div class="row">
                    <div class=" col-xs-12 col-sm-4 col-md-4  ">
                   
                    <div class="card" >
                   <img class="card-img-top  img-fluid rounded" src="./images/f1.jpg" alt="Card image" style="width:100%;height:290px;">
                   <div class="card-badge">...</div>
                   <div class="card-body">
                   <h4 class="card-title">Ruby</h4>
                   <p class="card-text">“Khách sạn mới, thiết kế đẹp, thiết bị hiện đại, phòng rộng rãi bố cục hợp lý, vị trí đẹp... Nhân viên lễ tân thân thiện, thức ăn phong phú. Chắc chắn tôi sẽ trở lại nơi này và sẽ giới thiệu cho bạn bè và đưa gia đình đến để trải nghiệm ."</p>
                   <a href="https://www.instagram.com/" class="btn btn-secondary stretched-link">See Profile</a>
                    </div>
                  </div>    
                    </div>
                    <div class="col-xs-12  col-sm-4 col-md-4">
                    <div class="card" >
                   <img class="card-img-top img-fluid rounded" src="./images/f2.jpg" alt="Card image" style="width:100%;height:290px;">
                   <div class="card-badge">...</div>
                   <div class="card-body">
                   <h4 class="card-title">Donald</h4>
                   <p class="card-text">“Mình rất thích Khách sạn MARRIOTT sang trọng và sạch sẽ. Vị trí tốt, ở trung tâm nên đi đến đâu cũng gần.Đặc biệt đồ ăn ở đây rất ngon và bắt mắt, nếu có cơ hội hãy ghé thăm khách sản để trải nghiệm!!!”</p>
                   <a href="https://www.instagram.com/" class="btn btn-secondary stretched-link">See Profile</a>
                    </div>
                  </div>    
                    </div>
                    <div class=" col-xs-12 col-sm-4 col-md-4 ">
                    <div class="card" >
                   <img class="card-img-top img-fluid rounded" src="./images/f3.jpg" alt="Card image" style="width:100%;;height:290px;">
                   <div class="card-badge">...</div>
                   <div class="card-body">
                   <h4 class="card-title">Gemma</h4>
                   <p class="card-text">"Nhân viên cực kì thân thiện ân cần, chu đáo và check in nhanh gọn.
Phòng ốc mới và đẹp. Decor nhìn rất sang trọng
Đặc biệt view bờ hồ cực đẹp, đi lại thuận tiện.
Rất thích. Chắc chắn sẽ ghé lại khi có dịp đến Khách sạn MARRIOTT"</p>
                   <a href="https://www.instagram.com/" class="btn btn-primary stretched-link">See Profile</a>
                    </div>
                  </div>    
                  </div>
                </div>

 
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
<!--Tổng quan-->
<div class="text-center">
  <h2 style="color: gray; margin-top:10px;margin-bottom:20px;">TỔNG QUAN</h2></div>
  <div  class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                   
                   <div class="card img-fluid" style="width:500px">
                   <img class="card-img-top img-fluid rounded" src="./images/phong.webp" alt="Card image" style="width:100%;height:200px;">
                   <div class="card-img-overlay">
                   <h4 class="card-title">PHÒNG NGHỈ</h4>
                  
                  <a href="room.php" class="btn btn-secondary">Xem Thêm</a>
                   </div>
                  </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 ">
                    
                     <div class="card img-fluid" style="width:500px">
                     <img class="card-img-top img-fluid rounded" src="./images/hoinghi.jpg"; style="width:100%;height:200px;">
                    <div class="card-img-overlay">
                    <h4 class="card-title">HỘI NGHỊ  </h4>
                    <a href="service.php" class="btn btn-secondary">Xem Thêm</a>
                   </div>
                   </div>
                    </div>
                    
                    <div class="col-xs-12  col-sm-3 col-md-3  ">
                    
                    <div class="card img-fluid" style="width:500px">
                    <img class="card-img-top img-fluid rounded " src="./images/khu-vuc-an-uong.png" alt="Card image" style="width:100%;height:200px;">
                    <div class="card-img-overlay">
                    <h4   class="card-title">ẨM THỰC</h4>
                  <a href="service.php" class="btn btn-secondary">Xem Thêm</a>
                  </div>
                  </div>
                  </div>
                  <div class=" col-xs-12 col-sm-3 col-md-3">
                  <div class="card img-fluid" style="width:500px">
                    <img class="card-img-top img-fluid rounded" src="./images/noithat.jpg" alt="Card image" style="width:100%;height:200px;">
                    <div class="card-img-overlay">
                    <h4 class="card-title">DỊCH VỤ</h4>
                    <a href="service.php" class="btn btn-secondary">Xem Thêm</a>
                </div>
               </div>
           </div>
           </div>
           <div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
</main>
<?php include('partials-front/footer.php'); ?>