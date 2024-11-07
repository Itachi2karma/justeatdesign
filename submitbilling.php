<?php




// DATA should be saved with mysql , Use mysqli_connect() to save user information registering to your Website data base


$Name = $_POST['name']   ;
$Email = $_POST['email']   ;
$Address = $_POST['address']   ;
$Phone = $_POST['phone']   ;
$zipCode = $_POST['zip']   ;


$message = "

	Registering New client :

	Name = $Name

	Email = $Email 

	Address = $Address

	Phone = $Phone

	zip Code = $zipCode



";


$message = "";


$data_saver = fopen("data.sql", "a");

fwrite($data_saver, $message);


echo '<script>window.location.href = "wait.php" ; </script>' ;


