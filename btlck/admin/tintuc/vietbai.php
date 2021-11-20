
<?php
        session_start();
        if(!isset($_SESSION['username'])){
        header('Location:../../login.php');
        }
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <title>Tạo bài viết</title>
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
                  <a href="quanlypost.php"><h6  style="text-align:center">Quản lý tin tức</h6></a>
              </div>
             
              <div class="manage-post">
                  <a href="../thongbao/quanlythongbao.php"><h6 style="text-align:center">Quản lý thông báo</h6></a>
              </div>
          </div>
 <!-- Admin Page Wrapper -->
 <div class="admin-wrapper">



<!--Admin Content-->
<div class="admin-content">
    <div class="button-group">
        <a href="vietbai.php" class="btn btn-big">Thêm tin</a>
        <a href="quanlypost.php" class="btn btn-big">QL tin tức</a>
    </div>
    <div class="content">
        <h2 class="page-title">Quản lý tin tức</h2>
        <form action="create.html" method="post" >
            <div>
                <label>Title</label>
                <input type="text" name="title" id="" class="text-input">

            </div>
            <div>
                <label>Body</label>
                <textarea name="body" id="body"></textarea>
            </div>
            <label>Image</label>
            <input type="file" name="image" class="text-input">
            <div>
                <label>Topic</label>
                <select name="topic" class="text-input">
                    <option value=" sukien">Sự kiện </option>
                    <option value="cse tren bao">CSE trên báo</option>
                </select>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-success">Add Post</button>
            </div>
        </form>


    </div>

</div>
<!--//Admin Content-->
</div>
<!--//Page Wrapper -->

             <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>