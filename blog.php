<?php include('partials-front/header.php'); ?>

<style>
.row{
    position: relative;
    margin-left: 40px;
}

ul{
list-style-type:none;
      }
ul li a{
    color:gray;
    font-size: 20px;
}
.ten {
  background-image: url(./images/room.jpg);
  background-size: cover;
  display:block;
  transition: all .3s ease;
  margin-top:5%;
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
.blog_post_image img{
width: 648px;
height: 417px;
transition: all .3s ease;
margin-top: 20px;
}
.blog_post_image img:hover{
    transform: scale(1.25);
}
.gallery_container img{
width: 317px;
height: 219px;
margin-top: 20px;

}


.latest_post_image img{
width: 318px;
height: 233px; 
transition: transform; 
}
.latest_post_image img:hover{

transform:rotateY(40deg); 
}
.sidebar_title{
    font-size: 30px;
    color:black;
    text-shadow: 2px 2px 10px #000;
    font-size:2rem;

}
.blog_post_date{
   background: #deaa86;
   color:white;
   padding:8px 14px 9px 13px;
   list-style: none;
   position: absolute;
    margin-bottom:40px ;
   font-size: 20px;
   display: inline-block;

}
.blog_post_text{
    text-align:center;
}

input{
    border: 0px solid white;
    border-bottom: 1px solid black;
    background: white;
}
.More{
    text-align: center;
    font-size: 30px;
    color:#747d8c;
    /* text-shadow: 2px 2px 10px #000; */
}
.More a{
    color:#747d8c;
    
}
.blog_post_link{
    text-align: center;
    font-size: 20px;
    margin-bottom: 70px;
    border-bottom: 2px solid gray;
    
}
.latest_post_content {
 
    text-align: center;
    font-size: 20px;
}
.blog_post_meta{
margin-top:80px;
}
.sidebar_gallery{
    margin-top: 70px;
}
.sidebar_archives{
    margin-top: 70px;
}
.sidebar_categories{
    margin-top: 70px;
}
.a{
     color:#747d8c;
}
</style>
</head>
<body>
<div  class=" text-center ten">
  <h1 style="color:white;padding:20px 0;text-shadow: 2px 2px 10px #000;">BLOG</h1>
  <span style="font-size:40px;text-shadow: 2px 2px 10px #000;color:white;">"Sự hài lòng là phương châm của chúng tôi"</span>
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
   <div class="blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                        <div  class=" text-center ">
                        <h1 style="text-shadow: 2px 2px 10px #000;color:black;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-bottom:2px solid gray; margin-bottom: 90px; ">EVENT - NEWS</h1>
                        
                        </div>
                            <div class="blog_post_container">
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img  class="img-fluid" src="./images/golf.jpg" alt="https://unsplash.com/s/photos/golf">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">18</div>
                                            <div class="blog_post_month">Tháng 10 năm 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">Bởi Brian</a></li>
                                            <li class="blog_post_meta_item"><a href="#">GOLF</a></li>
                                            <li class="blog_post_meta_item"><a href="#">3 bình luận</a></li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">Hãy thử những môn thể thao mang lại cảm giác thoải mái </a></div>
                                    <div class="blog_post_text">
                                        <p>"Để “chiều chuộng” hết chừng ấy yêu cầu quả là điều không dễ dàng, nhưng thật may, MARRIOT lại sở hữu những không gian lý tưởng cho môn thể thao này đầy tính nghệ thuật này. Không ít bạn bè nước ngoài đã trầm trồ ngạc nhiên với chất lượng sân golf Việt Nam."</p>
                                    </div>
                                    <div class="More"><a href="#">Đọc thêm</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                      
                                        <img class="img-fluid"  src="./images/man.webp" alt="https://pixabay.com/vi/images/search/l%c6%b0%e1%bb%9bt%20s%c3%b3ng/">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">19</div>
                                            <div class="blog_post_month">Tháng 10 năm 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">Bởi David</li>
                                            <li class="blog_post_meta_item"><a href="#">LƯỚT SÓNG</li>
                                            <li class="blog_post_meta_item"><a href="#">4 bình luận</li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">Hãy thử thách bản thân với sự kiện lướt sóng thú vị </a></div>
                                    <div class="blog_post_text">
                                        <p>" Lướt sóng và một trong những sự kiện thu hút rất nhiều khách hàng tham gia và cùng với những phần thưởng hấp dẫn "</p>
                                    </div>
                                    <div class="More"><a href="#">Đọc thêm</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img class="img-fluid" src="./images/wedding.webp" alt="https://pixabay.com/vi/images/search/%C4%91%C3%A1m%20c%C6%B0%E1%BB%9Bi%20tr%C3%AAn%20bi%E1%BB%83n%20/">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">20</div>
                                            <div class="blog_post_month">Tháng 10 năm 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">Bởi Christopher,Jessica</li>
                                            <li class="blog_post_meta_item"><a href="#">WEDDING</li>
                                            <li class="blog_post_meta_item"><a href="#">5 bình luận</li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">Trải nghiệm mùa cưới tại MARRIOT mang lại cho bạn đám cưới đáng nhớ </a></div>
                                    <div class="blog_post_text">
                                        <p>"Những đám cưới ở khách sạn đều được bên tổ chức thiết kế phù hợp với nhu cầu và yêu cầu của khách hàng "</p>
                                    </div>
                                    <div class="More"><a href="#">Đọc Thêm</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img class="img-fluid" src="./images/spa.jpg" alt="https://www.google.com/search?q=h%C3%ACnh+%E1%BA%A3nh++ti%E1%BB%87m+spa+4k&sxsrf=AOaemvI3DpxbQaU34SRCgox_QEuYwq93pA:1635512217747&tbm=isch&source=iu&ictx=1&fir=EvByxC8aYPou1M%252ClKFvmcScab9XGM%252C_%253B0Uh9ARjkBCCxjM%252ClKFvmcScab9XGM%252C_%253B8K9kCnFmKnjOuM%252C-RJCi4nMKIAb1M%252C_%253BkKvA4Uu90pXIYM%252C-RJCi4nMKIAb1M%252C_%253Buozbkwmj_heXqM%252Crr-0L_4uaR6MoM%252C_%253B65oGmw4golRAdM%252Cn4osAq4qvV2h_M%252C_%253BclRdJaC4Md-_FM%252CRW8bxk6LOIMpoM%252C_%253B8tyvl-ftFUOu5M%252Cs2lYVLiVwUGT6M%252C_%253BNKDB2qhB6uG22M%252Cfe6Jacx76pPTbM%252C_%253BnAO-YOqdeRWw6M%252ClKFvmcScab9XGM%252C_&vet=1&usg=AI4_-kRx115Kr8b1-mYvwELTRLNDVTIidA&sa=X&ved=2ahUKEwi2u47m1e_zAhUEHXAKHbjdC-EQ9QF6BAgCEAE#imgrc=EvByxC8aYPou1M">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">22</div>
                                            <div class="blog_post_month">Tháng 10 năm 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">Bởi LOCCYE</a></li>
                                            <li class="blog_post_meta_item"><a href="#">SPA</a></li>
                                            <li class="blog_post_meta_item"><a href="#">6 bình luận</a></li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">Các dịch vụ luôn là lựa chọn giúp cơ thể thoải mái  </a></div>
                                    <div class="blog_post_text">
                                        <p>"Không gian rộng rãi , thoải mái ,giúp mọi người thư giãn sau những ngày làm việc mệt mỏi "</p>
                                    </div>
                                    <div class="More"><a href="#">Đọc Thêm</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 sidebar_col">
                            <div class="sidebar_search">
                                <form action="#">
                                    <input id="sidebar_search_input" type="search" class="sidebar_search_input " placeholder="" required="required">
                                    <input id="sidebar_search_button" type="submit" class="sidebar_search_button " value="Tìm kiếm">
                                    
                                  
                                </form>
                            </div>
                            <div class="sidebar_archives">
                                <div class="sidebar_title">SỰ KIỆN GẦN ĐÂY</div>
                                <div class="sidebar_list">
                                    <ul>
                                        <li><a href="#">Tháng 7 năm 2021</a></li>
                                        <li><a href="#">Tháng 8 năm 2021</a></li>
                                        <li><a href="#">Tháng 9 năm 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_categories">
                                <div class="sidebar_title">Thể loại</div>
                                <div class="sidebar_list">
                                    <ul>
                                        <li><a href="#">Du lịch</a></li>
                                        <li><a href="#">Ẩm thực</a></li>
                                        <li><a href="#">Đám cưới</a></li>
                                        <li><a href="#">Các lời khuyên</a></li>
                                        <li><a href="#">Thể thao</a></li>
                                        <li><a href="#">Hội nghị </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_latest_posts">
                                <div class="sidebar_title">Bài viết mới nhất</div>
                                <div class="latest_posts_container">
                                    <ul>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/istockphoto.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">Nơi Lý tưởng để làm nên một đám cưới thơ mộng </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">bởi Smith</a></div>
                                                    <div class="latest_post_date "><a href="#">25 thg 8, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/beach.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">Địa điểm đáng mơ ước mà bạn cần đặt chân tới </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">bởi Jane</a></div>
                                                    <div class="latest_post_date "><a href="#">10 thg 10, 2021</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/familly.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title"><a href="#">Cùng gia đình tạo nên điều bất ngờ</a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">bởi Lucy</a></div>
                                                    <div class="latest_post_date "><a href="#">22 thg 10, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/eat.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">Nơi trải nghiệm những món ăn tuyệt vời </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">bởi lucas</a></div>
                                                    <div class="latest_post_date "><a href="#"> 26 thg 10, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_gallery">
                                <div class="sidebar_title">Instagram</div>
                                <div class="gallery_container">
                                    <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://pixabay.com/images/search/travel/">
                                            <img src="./images/a.jpg" alt="https://pixabay.com/images/search/travel/">
                                            </a>
                                        </li>
                                        
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/b.jpg" alt="c">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/c.jpg" alt="a">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/d.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/e.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
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
<?php include('partials-front/footer.php'); ?>
