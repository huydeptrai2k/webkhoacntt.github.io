<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Các đề tài , dự án</title>
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
                        <a href="index.php">Khoa công nghệ thông tin</a> > <a href="detaiduan.php">Các đề tài, dự án</a> 
                    </div>
                    <div class="main-content d-flex">
                        <div class="content-cnpm">
                             <h3><strong>DANH MỤC CÁC ĐỀ TÀI NGHIÊN CỨU</strong></h3>
                             <h5><strong>DANH MỤC ĐỀ TÀI CẤP NHÀ NƯỚC</strong></h5>
                             <table class="table">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên đề tài nghiên cứu</th>
                                        <th>Năm bắt đầu/Năm hoàn thành</th>
                                        <th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
                                        <th>Người thực hiện</th>
                                        <th>Trách nhiệm tham gia trong đề tài</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functionNCKH.php");
                                    // khai bao truy van
                                    $detai = getDTDACNN();
                                    foreach($detai as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[5];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                            <h5><strong>DANH MỤC ĐỀ TÀI CẤP BỘ</strong></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên đề tài nghiên cứu</th>
                                        <th>Năm bắt đầu/Năm hoàn thành</th>
                                        <th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
                                        <th>Người thực hiện</th>
                                        <th>Trách nhiệm tham gia trong đề tài</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functions.php");
                                    // khai bao truy van
                                    $detai = getDTDACB();
                                    foreach($detai as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[5];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                            <h5><strong>DANH MỤC ĐỀ TÀI CẤP CƠ SỞ</strong></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên đề tài nghiên cứu</th>
                                        <th>Năm bắt đầu/Năm hoàn thành</th>
                                        <th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
                                        <th>Người thực hiện</th>
                                        <th>Trách nhiệm tham gia trong đề tài</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functionNCKHCCS.php");
                                    // khai bao truy van
                                    $detai = getDTDACNN();
                                    foreach($detai as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[5];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                            <h5><strong>DANH MỤC CÁC ĐỀ TÀI/DỰ ÁN HỢP TÁC QUỐC TẾ</strong></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TT</th>
                                        <th>Tên đề tài nghiên cứu</th>
                                        <th>Năm bắt đầu/Năm hoàn thành</th>
                                        <th>Đề tài cấp (NN, Bộ, ngành, trường)</th>
                                        <th>Người thực hiện</th>
                                        <th>Trách nhiệm tham gia trong đề tài</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functionNCKHHTQT.php");
                                    // khai bao truy van
                                    $detai = getDTDAHTQT();
                                    foreach($detai as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[5];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="menu-bomon">
                            <h5><strong><a href="#">NGHIÊN CỨU KHOA HỌC</a></strong></h5>
                            <div class="menu">
                            <a href="detaiduan.php"><h6>Các đề tài , dự án</h6></a>
                                <a href="thongtinseminar.php"><h6>Thông tin seminar</h6></a>
                                <a href="congtrinhcongbo.php"><h6>Công trình công bố</h6></a>
                                <a href="phongthinghiem.php"><h6>Các phòng thí nghiệm</h6></a>  
                                
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