<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$tyre_no = $_POST["tyres"];
	$amount = $tyre_no*110;

    echo $firstname." ".$lastname.'<br/>';
    echo "Total amount due is: ".($amount).'<br/>';
	
    $servername = "localhost";
    $user="abc";
    $password="abc";
    $dbname="Assignmentdb";

    // Create connection
    $conn = new mysqli($servername,$user,$password,$dbname);

    // Check connection
    if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
    }
	else
	{
		$sql = "INSERT INTO Orders (firstname, lastname, noOftyres, amount)
		VALUES ('$firstname', '$lastname', '$tyre_no', '$amount')";

		if ($conn->query($sql) === TRUE)
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

    ?>
</body>
</html>