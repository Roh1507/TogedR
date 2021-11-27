<?php
$insert=false;
if (isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
  die("Connection Failed Error:".mysqli_connect_error());
}
  // echo "Connection Successful";

  $name=$_POST["name"];
  $email=$_POST["email"];
  $gender=$_POST["gender"];
  $phone=$_POST["phone"];
  $desc=$_POST["desc"];
$sql="INSERT INTO `togedr`.`trip` ( `name`, `email`, `gender`, `phone`, `otherInfo`, `date`) VALUES ('$name','$email','$gender','$phone', '$desc', current_timestamp());";
// //echo $sql;
//Sql AUTO_INCREMENT Problem
// ALTER TABLE `aafest`.`aafest_bestelling`
// AUTO_INCREMENT = 100,
// CHANGE COLUMN `Id` `Id` INT(11) NOT NULL AUTO_INCREMENT

if($con->query($sql)==true){
  //echo"Successful Inserted";
  $insert=true;
}else{
  echo "Error: $sql <br /> $con->error";
}
$con->close();
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="styles.css">

     <title>TogedR</title>

   </head>
   <body>
     <img src="KASOL_TOSH_MANALI.jpg"  alt="trip img">
     <div class="container">
       <h2>🏔️TogedR:Travel&Fun🏔️</h2><br>
           <p>Enter your details for Registeration</p>

           <?php
           if ($insert == true){
           echo "<p class='submit'>Thank you for Registeration. We will shortly contact you.</p>";
           }
           ?>
           <hr>
           <form action="index.php" id="travelForm" name="myForm" onsubmit="return validateForm()"  method="post">
             <label for="name"><b>Name:</b></label>
             <input type="text" name="name" placeholder="Enter name" required value=""><br>
             <label for="email"><b>Email:</b></label>
             <input type="email" name="email" placeholder="Enter email" required value=""><br>

             <label for="gender">Gender:</label>&nbsp;
             <label for="male" class="radio-inline">
               <input type="radio"
                   name="gender"
                   value="m"
                   id="male">Male</label>
               <label for="female" class="radio-inline">
                 <input  type="radio"
                   name="gender"
                   value="f"
                   id="female">Female</label>
               <label for="others" class="radio-inline">
                 <input type="radio"
                   name="gender"
                   value="o"
                   id="other">Other</label>
                      <br><br>
                   <label for="phone"><b>Contact Number:</b></label>
                   <input type="number" name="phone" placeholder="Enter Number" required value=""><br>
                   <textarea name="desc" rows="7" cols="120" placeholder="Enter Other Information"></textarea><br><br>
                  <button type="submit" name="button" class="btn1">Submit</button>&nbsp;&nbsp;
                  <button type="button" class="btn2" onclick="resetFunc()" >Cancel</button>
           </form>
     </div>
    </body>
<script type="text/javascript" src="example.js"></script>
 </html>
