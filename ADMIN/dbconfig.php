<!--insert and recording of data-->

<?php
    
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$servername = "192.168.150.213";
		$username = "webprogmi211";
		$password = "j@zzyAngle30";
		$dbname = "webprogmi211";
    
        

    // Making Connection with database

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO lvlim_MyGuests (Name, username, email, password, number, date, gender)
        VALUES ('$Name', '$username', '$email', '$password', '$number', '$date', '$gender')";

        if ($conn->query($sql) === TRUE) {
        echo "<br>Sign up successful!";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

    $conn->close();

    }
?>