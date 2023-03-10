<?php
include('dbconfig.php')

	// define variables and set to empty values
    $Name = $username = $email = $password = $number = $date = $gender = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $Name = test_input($_POST["name"]);
	  $username = test_input($_POST["username"]);
	  $email = test_input($_POST["email"]);
	  $password = test_input($_POST["password"]);
      $number = test_input($_POST["number"]);
	  $date = test_input($_POST["date"]);
	  $gender = test_input($_POST["gender"]);
	}

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
?>
