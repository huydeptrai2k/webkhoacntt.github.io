<?php 
   include("../../app/database/config.php");

   if(isset($_POST['submit'])){
       $title = $_POST["txtTitle"];
       $content = $_POST["body"];
       $topic = $_POST["topic"];  
       $sql =" INSERT INTO postthongbao ( title, content, topic, thoigian ) VALUES ('$title','$content','$topic',now())";
       $result= mysqli_query($conn,$sql);
       if($result){
           echo '<p style="text-align:center"> Them thanh cong  </p>';
       }else{
           echo'<p> Them  ko thanh cong  </p>';
       }

   }else{
       header("Location:vietbai.php");
   }
?>