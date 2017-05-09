<!--Muhammad Nur Alif
	18214007 -->
	
<?php
	$link = mysqli_connect("mysql3.gear.host", "websiteimka", "iloveJESUS<3", "websiteimka");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		echo "kontol";
	}
		
 if(getenv('REQUEST_METHOD') == 'POST') {
	$input = file_get_contents("php://input");

		$input  = json_decode($input, true); // decode JSON to associative array

		print_r($input);
				echo "kontol";
		$duration = $input["duration"];
	 		echo "kontol2";

		$sql = "INSERT INTO traffic_data (region, tl_condition, traffic, duration) VALUES ('Dago 01',
		'Active', '2', $duration)";
echo "kontol3";
		if ($conn->query($sql) == TRUE) {
			echo "New record inserted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	 echo "kontol4";
	}
?>
