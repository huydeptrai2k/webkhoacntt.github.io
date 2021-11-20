<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Tin tức</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
      <main class="container">
          <div class="row">
          <div class="duong-dan">
                  <a href="index.php">Khoa công nghệ thông tin</a> > <a href="listtintuc.php">Tin tức - sự kiện</a>
               </div>
            <div class="danhsachtintuc d-flex">
            <div class="khoa-cntt-thongbao" >
                 <h5 class ="title-khoa">K.CÔNG NGHỆ THÔNG TIN</h5>
                 <div class="menu-phu">
                     <a href="listthongbao.php">
                         <h5>Thông báo</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Tin tức hoạt động</h5>
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
                     <a href="#">
                         <h5>Nghiên cứu khoa học</h5>
                     </a>
                 </div>
                 <div class="menu-phu">
                     <a href="#">
                         <h5>Góp ý với khoa    </h5>
                     </a>
                 </div>
          </div>
                 <div class="listtintuc">             
                      <h5><strong>KHOA CNTT - SỰ KIỆN</strong></h5>
                      <?php
                 require("app/database/config.php");
                 include("app/database/functionthongbao.php");
                 // khai bao truy van
                 $tintuc = getAllTT();
                 foreach($tintuc as $row2){
                ?>
                      <div class="tintuc">
                        <div class="noi-bat d-flex">
                          <div class="anh-tin">
                              <a href="tintuc.php?id=<?php echo $row2[0]; ?>"><img src="assets/images/3_2.jpg" alt=""></a>
                          </div>
                         <div class="content-tin">
                          <a href="tintuc.php?id=<?php echo $row2[0]; ?>">
                              <h6 class="tieude-tintuc"><strong><?php echo $row2[1] ?></strong></h6>
                          </a>
                          <div class="time-tintuc">
                          <i class="far fa-calendar-alt"></i><?php echo $row2[4] ?> </div>
                          <div class="noidungchinh">
                              <p> <?php echo $row2[2] ?></p>
                          </div>

                         </div>
                        </div>
                       
                     </div>
                     <?php 
                                       }
                                     ?>
             </div>
                     
           
                      
                 </div>
                           
            <div class="list-page">
            <a class="dau" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</i></a>
            <a href="#">4</a>
            <a href="#">></a>
            <a href="#">>></a>
            </div>
                      </div>
                     
             </div>
             
            </div> 
                   
          </div>
      </main>
  <?php
    include("app/includes/footer.php");
 ?>   