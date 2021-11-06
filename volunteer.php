<?php

@$firstName = $_POST['firstName'];
@$lastName = $_POST['lastName'];
@$contact = $_POST['contact'];
@$Ndays = $_POST['Ndays'];
@$Availablefrom = $_POST['Availablefrom'];
@$email =$_POST['email'];
@$address =$_POST['address'];
@$aboutyourself =$_POST['aboutyourself'];
// database coonection
$conn = new mysqli('localhost' , 'root','','helpstation',);

   if($conn->connect_error){
       die('connecting failed :' . $conn->connect_error);
   }


   else{
       $stmt = $conn->prepare("insert into volunteer(firstName, lastName, contact, Ndays, Availablefrom, email, address, aboutyourself ) values(?, ?, ?, ?, ?, ?, ?, ?)");

       $stmt->bind_param("sssissss" , $firstName, $lastName, $contact, $Ndays, $Availablefrom, $email,  $address, $aboutyourself );
       $stmt->execute();
       echo "Thanks for registering yourself as volunteer, our team will contact you immediately";
       $stmt->close();
       $conn->close();
   }
  
 
?>
