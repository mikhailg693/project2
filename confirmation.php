<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmation Page</title>
	<link rel="stylesheet" href="style.css">
	<style>
		*{
			font-family: sans-serif;
		}
		.error{
			color:#f00;
		}
		.profilecontainer{
			margin:0px auto;
			text-align: center;
		}
/*
		.profilecontainer img{
			padding-bottom:10px;
			border: 10px #bbb double;
			width:300px;
			height:300px;
			border-radius: 50%;
			padding:10px;
		}
*/
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
	</style>
</head>
<body>
<h2>Confirmation</h2>

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