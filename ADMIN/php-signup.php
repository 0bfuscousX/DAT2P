<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plantitos de Mahr y JuaN Ah soy Asya de Pacifico</title>
        <link rel="icon" type="image/x-icon" href="https://store-images.s-microsoft.com/image/apps.49929.14554784103656548.6c0bfca6-ceff-4368-9bde-2fe50f344136.88fbc331-a034-4ba9-a091-d5c3dee58175?w=120">

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #ffbdb1;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
     <h2 style="color: rgb(112, 25, 25)">Please fill out the required fields to create your account.</h2>
     <hr color="magenta">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <legend style="padding:20px 0; font-size:20px;">Signup:</legend>
    <label for ="Name">Enter Name</label><br>
    <input type="text" placeholder="Name" id="Name" name ="Name"> 
    <br>
    <label for ="username">Enter Username</label><br>
    <input type="text" placeholder="Username" id="username" name ="username"> 
    <br>
    <label for ="email">Enter Email</label><br>
    <input type="text" placeholder="Email" id="email" name ="email">
    <br>
    <label for ="password">Enter Password</label><br>
    <input type="password" placeholder="Password" id="password" name ="password"> 
    <br>
    <label for ="number">Enter Mobile Number</label><br>
    <input placeholder="+63" id="number" name ="number">
    <br>
    <label for ="date">Enter Date of Birth</label><br>
    <input type="text" placeholder="YYYY/DD/MM" id="date" name ="date">
    <br>
    <label for ="gender">Enter Gender</label><br>
    <input type="text" placeholder="Male/Female/Other" id="gender" name="gender"><br>
    <br><a href="login.html" class="btn btn-primary">Sign Up</a>
    </fielsdet>
    </form>

    <?php
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
	}
	$conn->close();
     ?>
    
    </body>
    </html>