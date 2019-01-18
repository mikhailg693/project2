<?php session_start();// Starting Session ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Attendance Page</title>
    
    <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Custom styles here-->
    <link rel="stylesheet" href="css/style.css">
    
	<style>
		table, td {
			border: 3px solid mediumpurple;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: #fff;
		}
		th{
			background: mediumpurple;
			color:#000;
			padding:10px;
            text-align: center;
		}
		td {
			padding: 20px;
            color: #000;
		}
        body{
            background-color: white;
            width: 100%;
            margin: auto;
            
        }
	</style>
</head>
<body>

    <!--Logo & Nav-->
    
    <div class="header" style="background-color:white;">

        <div class="col-xs-3">
            <a href="index.html">
            <img src="img/mhshslogo.png" style="width:120px;height:75px;padding-top:3px;"></a>
        </div>

        <div class="navbar" id="navbar" style="margin-bottom:0px;margin-left:15px;margin-right:15px;padding-right:20px;padding-top:10px;">
            <ul class="nav navbar-nav navbar-right" style="background-color:white;border:2px solid mediumpurple;background-color:white;border-radius: 15px;">
                <li class="active" style="border-right: 1px solid mediumpurple"><a href="index.html">Home</a></li>
                <li style="border-right: 1px solid mediumpurple"><a href="contact.html" target="_blank">Contact Us</a></li>
                <li style="border-right: 1px solid mediumpurple"><a href="events.html" target="_blank">Events</a></li>
                <li style="border-right: 0px solid mediumpurple"><a href=registration.php target="_blank">Registration</a></li>
                <li style="border-left: 1px solid mediumpurple"><a href="dbdisplay.php" target="_blank">Attendance</a></li>
            </ul>

        </div>
    </div>
    
<table>
	<tr>
		<th>Name</th><th>Student ID</th><th>Email</th><th>Event</th>
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