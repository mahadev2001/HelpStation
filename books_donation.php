<?php

@$firstName = $_POST['firstName'];
@$lastName = $_POST['lastName'];
@$contact = $_POST['contact'];
@$email = $_POST['email'];
@$cityTown =$_POST['cityTown'];
@$state =$_POST['state'];
@$pincode =$_POST['pincode'];
@$country =$_POST['country'];
@$Nbooks =$_POST['Nbooks'];
@$whatdonate =$_POST['whatdonate'];
// database coonection
$conn = new mysqli('localhost' , 'root', '', 'helpstation',);

   if($conn->connect_error){
       die('connecting failed :' . $conn->connect_error);
   }


   else{
       $stmt = $conn->prepare("insert into books_donation(firstName, lastName, contact, email, cityTown, state, pincode, country, Nbooks, whatdonate  ) values( ?, ?, ?, ?, ?, ?, ?, ?,?, ?)");

       $stmt->bind_param("ssssssssis" , $firstName, $lastName, $contact, $email, $cityTown, $state, $pincode, $country, $Nbooks, $whatdonate );
       $stmt->execute();
       echo "Thankyou for the donation, we are working on your donation";
       $stmt->close();
       $conn->close();
   }
  
 
?>
