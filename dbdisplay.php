<?php session_start();// Starting Session ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<style>
		table, td {
			border: 1px solid #000;
		}
		th{
			background: #000;
			color:#fff;
			padding:10px;
		}
		td:first-child ~ td {
			padding: 20px;
		}
		
/*
		img{
			width:70px;
		}
*/
	</style>
</head>
<body>

<table>
	<tr>
		<th>name</th><th>student</th><th>email</th><th>event</th>
	</tr>

	<?php
		//connect to database
		$cnt = mysqli_connect("localhost", "root", "root", "mhshsp3");
		//sql statement to capture all data from a table
		$sql = "SELECT * FROM mhshsevents";
		//query by connecting and adding sql statement
		$result = mysqli_query($cnt,$sql);
		//print_r($result);
		foreach($result as $v) {
			//print_r($v);
			echo '<br>';
			echo '<tr><td>'.$v['full_name'].'</td><td>'.$v['student_id'].'</td><td>'.$v['user_email'].'</td><td>'.$v['school_event'].'</td></tr>';
		}
		//close the connection
		mysqli_close($cnt); // Closing Connection
	?>
</table>
</body>

</html>