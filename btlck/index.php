<?php
session_start();
?>
<head>
    <title>Khoa Công nghệ thông tin-Đại học Thủy Lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
<?php
    include("app/includes/header.php");
 ?>
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="eWc6cXWU"></script>
    <!-- Page Content-->

       <!-- Post Slider-->
      <div class="container">
      <div class="slider">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/khai-truong.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/banner.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/sslab.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/k54-tot-nghiep.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/hoi-thao.jpg" alt="Fourth slide">
    </div>
  </div>
  </div>
 </div>
 </div>
       <!-- //Post Slider-->
     <!-- Tin tuc - thong bao -->
    <div class="main">
    <div class="row">
         <div class="col-md-3">
             <div class="khoa-cntt">
                 <h5 class ="title-khoa">K.CÔNG NGHỆ THÔNG TIN</h5>
                 <div class="menu-phu">
                     <a href="listthongbao.php">
                         <h5>Thông báo</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="listtintuc.php">
                         <h5>Tin tức hoạt động</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Tuyển sinh</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Diễn đàn khoa</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Đào tạo đại học</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Đào tạo sau đại học</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="nghiencuukhoahoc.php">
                         <h5>Nghiên cứu khoa học</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="https://www.facebook.com/cse.tlu.edu.vn">
                         <h5>Góp ý với khoa    </h5>
                     </a>
                 </div>
        <div class="col-md-3">
             <div class="thongtin-lienhe ">
                 <h5><i class="fas fa-graduation-cap"></i><span>THÔNG TIN LIÊN HỆ</span></h5>
                <div class="diachi">
                   <h6>Khoa Công nghệ thông tin</h6>
                </div>
                <div class="diachi">
                   <h6><i class="fas fa-map-marker-alt"></i><span> Nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội</span></h6>
                </div>
                <div class="diachi">
                   <h6><i class="fas fa-tty"></i> <span> (+84)-024 3 5632211</span></h6>
                </div>
                <div class="diachi">
                   <h6><i class="fas fa-envelope"></i><span> vpkcntt@tlu.edu.vn</span></h6>
                </div>
                 
                 
             </div>
         </div>
         <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="" data-width="400" data-height="120" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
             </div>
         </div>
         <?php
                    require("app/database/config.php");
                    include("app/database/functionthongbao.php");
                     // khai bao truy van
                     $thongbao = getAllTBTD();
                     foreach($thongbao as $row){
                    ?>
         
        
         <div class="col-md-6">
         <div class="thongtin-thongbao">
              <h2 class = "title-thongbao"><i class="fas fa-bullhorn"></i><span><?php echo $row[1] ?></span></h2>
                <div class="content-thongbao">
                <?php
                   
                     // khai bao truy van
                     $thongbao = getAllPTB($row[0]);
                     foreach($thongbao as $row1){
                        
                    ?>
                <div class="thongbao d-flex">
                <img class="anh-thongbao" src="assets/images/banner.jpg" alt="">
                <a href="thongbao.php?id=<?php echo $row1[0]; ?>">
                <h4 class ="tieude-thongbao"><?php echo $row1[1]; ?></h4>
                <span class="time-thongbao"><i class="far fa-calendar"><?php echo $row1[4]; ?></i></span>
                </a>
                </div>
                <?php 
                                       }
                                     ?>
               
               <div class="xem-them">
                   <a href="listthongbao.php">
                      <h5>xem thêm >></h5>
                   </a>
               </div>
                </div>
           </div>
         
         <?php 
                                       }
                                     ?>
         </div>
          
         
      </div>
    
    </div>

       <!--Hoạt động nổi bật-->
       <!--Page Wrapper -->
 <div class="page-wrapper">

<!--Post Slider -->
    <div class="post-slider">
    <h3 class="slider-title">TIN TỨC -SỰ KIỆN</h3>
    <i class="fa fa-chevron-left prev"></i>
    <i class="fa fa-chevron-right next"></i>

    <div class="post-wrapper ">
         <?php
                 
                     // khai bao truy van
                     $tintuc = getAllTT();
                     foreach($tintuc as $row2){
                    ?>
        <div class="post ">
            <img src="assets/images/rivf.jpg" alt=" " class="slider-image">
            <div class="post-info">
                <h5><a href="tintuc.php?id=<?php echo $row2[0]; ?>"></i><span><?php echo $row2[1] ?></a></h5>
                <i class="far fa-calendar"><?php echo $row2[4] ?></i>
            </div>
        </div>
        <?php 
                                       }
                                     ?>
         </div>
      </div>

   </div>
</div>
<!--//Post Slider -->

         <!--//Hoạt động nổi bật-->
       <!--// Page Content-->
       <?php 
       include("app/includes/footer.php");
       ?>