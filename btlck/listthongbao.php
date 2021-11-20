<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Thông báo</title>
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
                  <a href="index.php">Khoa công nghệ thông tin</a> > <a href="listthongbao.php">Thông báo</a>
               </div>
            <div class="danhsachthongbao d-flex">
            <div class="khoa-cntt-thongbao" >
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
        <div class="listthongbao">
            <h5><strong>KHOA CNTT - THÔNG BÁO</strong></h5>
            <?php
                 require("app/database/config.php");
                 include("app/database/functionthongbao.php");
                 // khai bao truy van
                 $thongbao = getAllTB();
                 foreach($thongbao as $row1){
                ?>
             <div class="thongbaoday">
                 <a href="thongbao.php?id=<?php echo $row1[0]; ?>">
                     <h6><strong><?php echo $row1[1]; ?></strong></h6>
                 </a>
                 <div class="time-thongbao"><i class="far fa-calendar-alt"></i></div>
                     <div class="clear">
                       <p><?php echo $row1[1]; ?></p>
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
     </main>
  <?php
    include("app/includes/footer.php");
 ?>   