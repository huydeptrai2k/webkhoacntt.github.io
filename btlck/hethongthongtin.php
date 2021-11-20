<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Hệ thống thông tin</title>
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
                        <a href="index.php">Khoa công nghệ thông tin</a> > <a href="hethongthongtin.php">Hệ thống thông tin</a> 
                    </div>
                    <div class="main-content d-flex">
                        <div class="content-cnpm">
                             <h4><strong>Giới thiệu Bộ môn hệ thống thông tin</strong></h4>
                             <h6><strong>Bộ môn Hệ thống thông tin đảm nhiệm chức năng giảng dạy tin đại cương, môn tin cơ sở và chuyên ngành Hệ thống thông tin</strong></h6>
                             <h6><strong>Thành phần lãnh đạo bộ môn:</strong></h6>
                             <h6><strong>1. Trưởng bộ môn: TS. GVC. Đặng Thị Thu Hiền</strong></h6>
                             <img class="anh" src="assets/images/Copy of Dang Thu Hien (1).jpg" alt="" width=10% > 
                             <h6><strong>2. Phó Trưởng bộ môn: TS. Trẫn Mạnh Tuấn</strong></h6>
                            
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
                                    $monhoc = getAllMHHTTT();
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