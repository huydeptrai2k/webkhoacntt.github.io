<?php
        session_start();
        if(!isset($_SESSION['username'])){
        header('Location:../../login.php');
        }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quản lý post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
          <div class="nav-ql d-flex">
              <div class="logo-ql ">
                  <h5>KHOA CNTT-TLU</h5>
              </div>
              <div class="taikhoan">
                    <a href="../../app/database/session.php">
                    <h6>Đăng xuất >></h6>
                    </a>
                 </div>
          </div>
        <div class="quanly d-flex">
          <div class="menu-quanly">
              <div class="manage-post">
                  <a href="../tintuc/quanlypost.php"><h6  style="text-align:center">Quản lý tin tức</h6></a>
              </div>
            
              <div class="manage-post">
                  <a href="quanlythongbao.php"><h6 style="text-align:center">Quản lý thông báo</h6></a>
              </div>
          </div>
            <!-- admin-content-->
            <main class="container">
           <div class="row">
             <div class="col-md-9">
                   <div class="admin-content">
                      <div class="button-group">
                       <a href="vietbai.php" class="btn btn-big">Thêm bài</a>
                       <a href="quanlythongbao.php"t.php class="btn btn-big">QLThông báo</a>
                       </div>
                       <div class="content">
                <h2 class="page-title" style="text-align:center" >Quản lý thông báo</h2>
                <table class="table-tintuc">
                    <thead class="thead-dark"> 
                        <th>SN</th>
                        <th>title</th>
                        <th colspan="3"> Action</th>
                    </thead>
                    <?php
                    require("../../app/database/config.php");
                    include("../../app/database/functionthongbao.php");
                     // khai bao truy van
                     $thongbao = getAllTB();
                     foreach($thongbao as $row){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row[0];?></td>
                            <td><?php echo $row[1];?></td>
                            <td><a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></td>
                            <td><a href="delete.php?id=<?php echo $row[0];?>"><i class="fas fa-user-minus"></i></a></td>
                           
                        </tr>
                        <?php 
                                       }
                                     ?>
                    
                    </tbody>
                </table>

            </div>
                   </div>
               </div>
           </div>
           </main>
           </div>
          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script src="../../assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>