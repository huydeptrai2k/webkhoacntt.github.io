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
           <div class="col-md12">
                 <div class="duong-dan">
                  <a href="index.php">Khoa công nghệ thông tin</a> > <a href="listtintuc.php">Tin tức -sự kiện</a>
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
             <div class="content-thongbao">
             <?php
                    require("app/database/config.php");
                    include("app/database/functionthongbao.php");
                   // khai bao truy van
                   $tinTuc = getAllPTTCT($_GET['id']);
                   foreach($tinTuc as $row2){
                  ?>
             <h2 class="title"><?php echo $row2[1] ?> </h2>
             <div class="time-thongbao"><i class="far fa-calendar-alt"></i> <?php echo $row2[4] ?></div>
             <div class="content">
                 <h6><?php echo $row2[2] ?></h6>
             </div>
             <?php 
                                       }
                                     ?>
             </div>
            
          </div>
          <div class="thongbaonoibat">
                <div class="col-md-8">
                <h4><strong>CÁC THÔNG TIN KHÁC</strong></h4>
                <table class="table">                  
                    <tbody>
                        <tr>
                            <td> >> <strong><a href="#">Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng facebook"</a></strong></td>
                        </tr>
                        <tr>
                            <td> >> <strong><a href="#"> 3 trong 4 sinh viên Trường Đại học Thủy lợi đạt giải tại Olympic Tin học toàn quốc là tân sinh viên Khóa 60</a></strong></td>
                        </tr>
                        <tr>
                            <td> >> <strong><a href="#"> Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa CNTT</a></strong></td>
                        </tr>
                        <tr>
                            <td> >> <strong><a href="#"> Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa CNTT</a></strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td> >> <strong><a href="#"> Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa CNTT</a></strong></td>
                        </tr>
                        <tr>
                            <td>  <strong> >><a href="#"> Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa CNTT</a></strong></td>
                        </tr>
                    </tbody>
                </table>
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
  </main>
  <?php
    include("app/includes/footer.php");
 ?>