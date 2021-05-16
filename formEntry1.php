<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "shop";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) 
// {
//   die("Connection failed: " . $conn->connect_error);
// }
require_once './connection.php';

if(isset($_POST['btn1']))
{
     $Id = $_POST['id'];
     $Name = $_POST['name'];
     $Price = $_POST['price'];
     $Type = $_POST['type'];
     $Size = $_POST['size'];
     $Weight = $_POST['weight'];
     $Height = $_POST['height'];
     $Width = $_POST['width'];
     $Length = $_POST['length'];


     $query1="INSERT INTO products(id,name,price,size,weight,height,width,length) 
     VALUES('$Id','$Name','$Price','$Size','$Weight','$Height','$Width','$Length')";
     $sql1 = "INSERT INTO products (id_name,name,price,type,size)
VALUES ('$Id','$Name','$Price','$Type','$Size')";
    
    $sql2 = "INSERT INTO products (id_name,name,price,type,weight)
    VALUES ('$Id','$Name','$Price','$Type','$Weight')";
    $sql3 = "INSERT INTO products (id_name,name,price,type,height,width,length)
    VALUES ('$Id','$Name','$Price','$Type','$Height','$Width','$Length')";
 if($Type==="CD"){
   if ($conn->query($sql1) === TRUE) {
   
      header("Location: index.php");
      
   } else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
   }

 } 
 elseif ($Type==="Books") {
   if ($conn->query($sql2) === TRUE) {
   
      header("Location: index.php");
      
   } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
   }
 } else {
   if ($conn->query($sql3) === TRUE) {
   
      header("Location: index.php");
      
   } else {
      echo "Error: " . $sql3 . "<br>" . $conn->error;
   }
   
   
 }
    






}
$conn->close();
?> 


