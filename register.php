<?php

@$firstName = $_POST['firstName'];
@$lastName = $_POST['lastName'];
@$address = $_POST['address'];
@$pincode = $_POST['pincode'];
@$gender = $_POST['gender'];
@$email = $_POST['email'];
@$number =$_POST['number'];

// database coonection
$conn = new mysqli('localhost' , 'root','', 'helpstation');

   if($conn->connect_error){
       die('connecting failed :' . $conn->connect_error);
   }


   else{
       $stmt = $conn->prepare("insert into register(firstName, lastName, address, pincode, gender, email, number ) values(?, ?, ?, ?, ?, ?, ?)");

       $stmt->bind_param("ssssssi" , $firstName, $lastName, $address, $pincode, $gender, $email, $number);
       $stmt->execute();
       echo "resistration successful...";
       $stmt->close();
       $conn->close();
   }
  
 
?>

