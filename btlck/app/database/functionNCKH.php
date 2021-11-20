<?php
 function getDTDACNN(){
     global $conn;
     $sql =" SELECT * FROM detainghiencuu WHERE detaicap='Cấp nhà nước'";
     $result= mysqli_query($conn,$sql);
     $detai = mysqli_fetch_all($result);
     return $detai;
 }

?>
