<?php
	

if((isset($_POST['firstname']) && !empty($_POST['firstname']))
   && (isset($_POST['lastname']) && !empty($_POST['lastname']))
  && (isset($_POST['email']) && !empty($_POST['email']))
   && (isset($_POST['Phone']) && !empty($_POST['Phone']))
&& (isset($_POST['country']) && !empty($_POST['country']))){
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $Phone = $_POST['Phone'];
    $country = $_POST['country'];
	$message = $_POST['message'];
	
	$to = 'haryorolal2@gmail.com ';
	$headers = "From: $firstname\n Email: $email\n message:\n $message";
    
	
	if( mail($to, $Phone, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
	}
}
?>




<?php
    //conection to database
    
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'Ayanfe');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$query = "INSERT INTO `ayanfe` (firstname, lastname, email, Phone, country, message) VALUES ('$firstname', '$lastname', '$email', '$Phone', '$country', '$message')";
$result = mysqli_query($connection, $query);
?>