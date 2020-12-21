 <?php
   include 'connection.php';
    $sql = "select * from  receipt";

     $result = mysqli_query($conn,$sql);
     
     
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/print.css" />
</head>
<body>
    <main>
      <center>Receipt List</center>
       <table>
          <thead>
             <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Course</th>
               <th>Section</th>
               <th>Amount</th>
               <th>Date</th>
             </tr>
          </thead>
           <tbody>
    <?php
         if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>
                   <tr>
                 <td><?php echo $row['id']; ?></td>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['class']; ?></td>
                 <td><?php echo $row['batch']; ?></td>
                 <td><?php echo $row['total']; ?></td>
                 <td><?php echo $row['date']; ?></td>
              </tr>
        <?php    }
       }
      ?>
             
              
          </tbody>
       </table>
        <button><a href="index.php">Back</a></button>
    </main>
</body>
</html>