<?php
 function getDTDAHTQT(){
     global $conn;
     $sql =" SELECT * FROM detainghiencuu WHERE detaicap='Hợp tác quốc tế'";
     $result= mysqli_query($conn,$sql);
     $detai = mysqli_fetch_all($result);
     return $detai;
 }

?>