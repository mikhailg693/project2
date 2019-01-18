<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmation Page</title>
    
        <!--Required metatag and stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Custom styles here-->
    <link rel="stylesheet" href="css/style.css">
    
	<style>
		*{
			font-family: sans-serif;
		}
		.error{
			color:#f00;
		}

		.profilecontainer, h2{
			margin:0px auto;
			text-align: center;
            border: dashed 3px mediumpurple;
            margin-left: 400px;
            margin-right: 400px;
		}

		.profilecontainer span{
			display: inline-block;
			width:49%;
		}
		.profilecontainer .left{
			text-align: right;
		}
		.profilecontainer .right{
			text-align: left;
		}
        .header, .navbar{
            margin-bottom: 150px;
        }

	</style>
</head>

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
    
<body>
    
<div>
<h2>Confirmation</h2><br>
</div>
    
<!--php displaying entered data from registration page    -->
    
<?php ?>
<div class="profilecontainer">
<!--	<img src="<?php echo $_SESSION['f'] ?>">-->
	<h4>
		<span class="left">Full Name:&nbsp;</span>
		<span class="right"><?php echo $_SESSION['f'] ?></span>
	</h4>
	<h4>
		<span class="left">Student ID:&nbsp;</span>
		<span class="right"><?php echo $_SESSION['s'] ?></span>
	</h4>
    <h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right"><?php echo $_SESSION['e'] ?></span>
	</h4>
    <h4>
		<span class="left">Events:&nbsp;</span>
		<span class="right"><?php echo $_SESSION['v'] ?></span>
	</h4>
</div>
</body>
</html>