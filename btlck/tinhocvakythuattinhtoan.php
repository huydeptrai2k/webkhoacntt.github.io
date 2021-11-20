<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Tin học và kỹ thuật tính toán</title>
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
            <div class="col-md-12">
                   <div class="duong-dan">
                        <a href="index.php">Khoa công nghệ thông tin</a> > <a href="tinhocvakythuattinhtoan.php">Tin học và kỹ thuật tính toán</a> 
                    </div>
                    <div class="main-content d-flex">
                        <div class="content-cnpm">
                             <h4><strong>Giới thiệu Bộ môn Tin học và Kỹ thuật Tính toán</strong></h4>
                             <h6>Bên cạnh nhiệm vụ giảng dạy các môn Tin học văn phòng và Tin học đại cương cho sinh viên toàn trường, BM Tin học và Kỹ thuật tính toán còn đảm nhiệm một số môn cơ sở Toán học trong CNTT, các kỹ thuật tính toán, xử lý dữ liệu như: Tư duy tính toán, Thuật toán ứng dụng, Toán rời rạc, Học máy, Tin sinh,...</h6>
                             <h6><strong>Thành phần lãnh đạo bộ môn:</strong></h6>
                             <h6><strong>1. Trưởng bộ môn: TS. Nguyễn Quỳnh Diệp</strong></h6>
                             <img class="anh" src="assets/images/codiep.png" alt="" width=10% >  
                             <h6></h6>
                             <h6></h6>
                             <h6></h6>
                             <h6><strong>1. Phó trưởng bộ môn: ThS. NCS. Trương Xuân Nam</strong></h6>
                             <img src="assets/images/thaythanh.jpg" alt="">
                             <h6></h6>
                             <h6></h6>
                             <h6></h6>
                             <h6><strong>Các môn học giảng dạy</strong></h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên môn</th>
                                        <th>Tên tiếng anh</th>
                                        <th>Mã môn</th>
                                        <th>Số tín chỉ</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functions.php");
                                    // khai bao truy van
                                    $monhoc = getAllMHTHVKTTT();
                                    foreach($monhoc as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                         
                        </div>
                        <div class="menu-bomon">
                            <h5><strong><a href="#">BỘ MÔN-TRUNG TÂM</a></strong></h5>
                            <div class="menu">
                            <a href="congnghephanmem.php"><h6>CN phần mềm</h6></a>
                                <a href="hethongthongtin.php"><h6>Hệ thống thông tin</h6></a>
                                <a href="khoahocmaytinh.php"><h6>Khoa học máy tính</h6></a>
                                <a href="kythuatmaytinhvamang.php"><h6>Kỹ thuật máy tính và mạng</h6></a>
                                <a href="toanhoc.php"><h6>Toán học</h6></a>
                                <a href="tinhocvakythuattinhtoan.php"><h6>Tin học và kỹ thuật tính toán</h6></a>
                                <a href="trungtamtinhoc.php"><h6>Trung tâm tin học</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="vetrangchu" >
                     <a href="index.php">
                       <h6>Trở về trang chủ  >></h6>
                     </a>
                   </div>
            </div>
        </div>
  </main>
  <?php
    include("app/includes/footer.php");
 ?> 