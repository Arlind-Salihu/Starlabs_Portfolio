<?php
	include 'server.php';

if (isset($_POST['submitMessage'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $email= mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  if (count($errors) == 0) {
  	$query = "INSERT INTO contactForm (name, surname, email, message) 
  			  VALUES('$name', '$surname', '$email' ,'$message')";
  	mysqli_query($conn, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['surname'] = $email;
  	$_SESSION['email'] = $email;
	$_SESSION['message'] = $message;
  	$_SESSION['success'] = "Message sent succesfully!";

  }
}
?>