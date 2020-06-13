<?php
	

if((isset($_POST['firstname']) && !empty($_POST['firstname']))
   && (isset($_POST['lastname']) && !empty($_POST['lastname']))
  && (isset($_POST['email']) && !empty($_POST['email']))
   && (isset($_POST['Phone']) && !empty($_POST['Phone']))
    && (isset($_POST['DOB']) && !empty($_POST['DOB']))
    && (isset($_POST['level']) && !empty($_POST['level']))
    && (isset($_POST['resumption']) && !empty($_POST['resumption']))
    && (isset($_POST['gender']) && !empty($_POST['gender']))
&& (isset($_POST['country']) && !empty($_POST['country']))
   && (isset($_POST['state']) && !empty($_POST['state']))
   && (isset($_POST['city']) && !empty($_POST['city']))){
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $Phone = $_POST['Phone'];
    $DOB = $_POST['DOB'];
    $level = $_POST['level'];
    $resumption = $_POST['resumption'];
    $gender = $_POST['gender'];
    $resumption = $_POST['resumption'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
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
$select_db = mysqli_select_db($connection, 'AyanfeReg');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$query = "INSERT INTO `ayanfe` (firstname, lastname, email, Phone, DOB, level, resumption, gender, country, state, city, message) VALUES ('$firstname', '$lastname', '$email', '$Phone', '$DOB', '$level', '$resumption', '$gender', '$country', '$state', '$city', '$message')";
$result = mysqli_query($connection, $query);
?>