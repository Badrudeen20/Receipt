<?php
    include 'connection.php';
    $sql = "select id from receipt";
     $i = 0;
     $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
         while( $row = mysqli_fetch_array($result ,MYSQLI_ASSOC)){
                $i = $row['id']+1;
         }
      }else{
         $i +=1;
      }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" />
</head>
<body>
    <form action="receipt.php" method="post" >
    <div class="container">
        <h4>Reciept</h4>
       <div class="date">
           <p>No.<span><?php echo $i; ?></span></p>
           <p>Date<input type="text" name="date" id="date" value="20/06/2020" /></p>
        </div> 
           <div class="form-group">
               <label class="form-label">Student Name</label>
               <input type="text" class="form-control" name="name" placeholder="Name" required/>
           </div>
          <div class="detail">
           <div  class="form-select">
            <label class="form-label">Course</label>
            <select name="class" class="selected" required>
               <option>Bca</option>
               <option>Mca</option>
               <option>Dca</option>
               <option>Pgdca</option>
            </select>
          </div>
          <div class="form-select">
            <label class="form-label">Section</label>
            <select name="batch" class="selected"  required>
               <option>section A</option>
               <option>section B</option>
               <option>section c</option>

            </select>
          </div>
        </div>

        <div class="form-group">
            <label class="form-label">Yrs/Month</label>
            <input type="text" class="form-control" name="month" placeholder="Months" required/>
          </div>
   
    <!--month-->

        <div class="detail">
            <label class="form-label">Amount</label>
            <label class="form-label">Month</label>
            <label class="form-label">Total</label>
        </div>
    <!--fee detail-->
     <div class="col">
        <div class="detail">
           <input type="text"  onchange="text(this.value)" class="form-control"   placeholder="Tusion" required/>
           <input type="text"  class="form-control month "/>
           <input type="text" class="form-control total amt"/>
        </div>
      
          </div>
            <div>
              
            </div>
            <button type="button" onclick="add()">Add</button>
          <!--total-->
         <div class="form-group">
         <div class="totalamount">
         <label class="form-label">Total Fee</label>
         <button type="button" onclick="amount()">Total</button>
         </div>
            
            <input type="text" class="form-control" id="totalamount" name="total" placeholder="Total" />
          </div>
          <div>
          <button name="submit" type="submit">save</button>
          </div>
         
    </div>
</form>
 <script src="js/jquery.min.js"></script>
  <script src="js/date.js"></script>
  <script src="js/total.js"></script>
</body>
</html>