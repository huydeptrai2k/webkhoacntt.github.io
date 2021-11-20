<?php
 function getAllGV(){
     global $conn;
     $sql =" SELECT * FROM covanhoctap ";
     $result= mysqli_query($conn,$sql);
     $giaovien = mysqli_fetch_all($result);
     return $giaovien;
 }

?>
<?php
 function getAllMH(){
     global $conn;
     $sql =" SELECT * FROM congnghephanmem ";
     $result= mysqli_query($conn,$sql);
     $monhoc = mysqli_fetch_all($result);
     return $monhoc;
 }

?>
<?php
 function getAllMHHTTT(){
     global $conn;
     $sql =" SELECT * FROM hethongthongtin ";
     $result= mysqli_query($conn,$sql);
     $monhoc = mysqli_fetch_all($result);
     return $monhoc;
 }

?>
<?php
 function getAllMHKHMT(){
     global $conn;
     $sql =" SELECT * FROM khoahocmaytinh ";
     $result= mysqli_query($conn,$sql);
     $monhoc = mysqli_fetch_all($result);
     return $monhoc;
 }

?>
<?php
 function getAllMHKTMTVM(){
     global $conn;
     $sql =" SELECT * FROM kythuatmaytinhvamang";
     $result= mysqli_query($conn,$sql);
     $monhoc = mysqli_fetch_all($result);
     return $monhoc;
 }

?>
<?php
 function getAllMHTHVKTTT(){
     global $conn;
     $sql =" SELECT * FROM tinhocvakythuattinhtoan";
     $result= mysqli_query($conn,$sql);
     $monhoc = mysqli_fetch_all($result);
     return $monhoc;
 }

?>
<?php
 function getDTDACB(){
     global $conn;
     $sql =" SELECT * FROM detainghiencuu WHERE detaicap='Cấp Bộ'";
     $result= mysqli_query($conn,$sql);
     $detai = mysqli_fetch_all($result);
     return $detai;
 }

?>


