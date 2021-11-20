<?php
    include("app/includes/header.php");
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Cố vấn học tập</title>
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
                        <a href="index.php">Khoa công nghệ thông tin</a> > <a href="sinhvien.php">Sinh viên</a> 
                    </div>
                    <div class="covanhoctap d-flex">
                       
                        <div class="content">
                            <h3><strong>Danh sách cố vấn học tập năm học 2015-2016</strong></h3>
                            <h5>DANH SÁCH CỐ VẤN HỌC TẬP KHOA CÔNG NGHỆ THÔNG TIN NĂM HỌC 2015- 2016</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Lớp</th>
                                        <th>Họ và tên</th>
                                        <th>Bộ môn</th>
                                    </tr>
                                </thead>
                                <?php
                                    require("app/database/config.php");
                                    include("app/database/functions.php");
                                    // khai bao truy van
                                    $giaovien = getAllGV();
                                    foreach($giaovien as $row){
                                ?>
                                <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row[0];?></td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                    </tr>
                                    <?php 
                                       }
                                     ?>
                                </tbody>
                            </table>
                        </div>             
                        <div class="menu-tuyensinh">
                            <h5><strong><a href="sinhvien.php">Tuyển sinh</a></strong></h5>
                            <div class="menu">
                               <a href=""><h6>Ngành CNTT</h6></a>
                                <a href=""><h6>Ngành Hệ thống thông tin</h6></a>
                                <a href=""><h6>Kỹ thuật phần mềm</h6></a>
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