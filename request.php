<?php

@$firstName = $_POST['firstName'];
@$lastName = $_POST['lastName'];
@$contact = $_POST['contact'];
@$email = $_POST['email'];
@$address = $_POST['address'];
@$need =$_POST['need'];

// database coonection
$conn = new mysqli('localhost' , 'root','', 'helpstation',);

   if($conn->connect_error){
       die('connecting failed :' . $conn->connect_error);
   }


   else{
       $stmt = $conn->prepare("insert into request_(firstName, lastName, contact, email, address, need ) values(?, ?, ?, ?, ?, ?)");

       $stmt->bind_param("ssisss" , $firstName, $lastName, $contact, $email, $address, $need);
       $stmt->execute();
       echo "request accepted...";
       $stmt->close();
       $conn->close();
   }
  
 
?>

