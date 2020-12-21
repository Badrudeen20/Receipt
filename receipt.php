<?php
 include 'connection.php';
  if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $class = $_POST['class'];
       $batch = $_POST['batch'];
       $month = $_POST['month'];
       $total = $_POST['total'];
       $date = $_POST['date'];
       $sql  = "insert into receipt (name,class,batch,months,total,date)
        values('$name','$class','$batch','$month','$total','$date')";

        $result = mysqli_query($conn,$sql);
        
     if($result){
          header("location:print.php");
     }else{
        header("location:receipt.php");
     }
  }

 ?>