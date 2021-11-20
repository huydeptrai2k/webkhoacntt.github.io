<?php
 function getAllTB(){
     global $conn;
     $sql =" SELECT * FROM postthongbao ";
     $result= mysqli_query($conn,$sql);
     $thongbao = mysqli_fetch_all($result);
     return $thongbao;
 }

?>
<?php
 function getAllTT(){
     global $conn;
     $sql =" SELECT * FROM tintucsukien ";
     $result= mysqli_query($conn,$sql);
     $tintuc = mysqli_fetch_all($result);
     return $tintuc;
 }

?>
<?php
 function getAllTBTD(){
     global $conn;
     $sql =" SELECT * FROM loaithongbao  ORDER BY idltb desc limit 1,2 ";
     $result= mysqli_query($conn,$sql);
     $thongbao = mysqli_fetch_all($result);
     return $thongbao;
 }

?>
<?php
 function getAllTBSM(){
     global $conn;
     $sql =" SELECT * FROM postthongbao WHERE idltb=4 ";
     $result= mysqli_query($conn,$sql);
     $thongbao = mysqli_fetch_all($result);
     return $thongbao;
 }

?>
<?php
 function getAllPTB($id){
     global $conn;
     $sql =" SELECT * FROM postthongbao WHERE idltb= $id ";
     $result= mysqli_query($conn,$sql);
     $thongbao = mysqli_fetch_all($result);
     return $thongbao;
 }

?>

<?php
 function getAllPTBCT($id){
     global $conn;
     $sql =" SELECT * FROM postthongbao WHERE matb = $id ";
     $result= mysqli_query($conn,$sql);
     $thongbao = mysqli_fetch_all($result);
     return $thongbao;
 }

?>
<?php
 function getAllPTTCT($id){
     global $conn;
     $sql =" SELECT * FROM posttintuc WHERE id = $id ";
     $result= mysqli_query($conn,$sql);
     $tinTuc = mysqli_fetch_all($result);
     return $tinTuc;
 }

?>