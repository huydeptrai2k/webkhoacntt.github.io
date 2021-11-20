<?php
 function getDTDACCS(){
     global $conn;
     $sql =" SELECT * FROM detainghiencuu WHERE detaicap='Cấp cơ sở'";
     $result= mysqli_query($conn,$sql);
     $detai = mysqli_fetch_all($result);
     return $detai;
 }

?>