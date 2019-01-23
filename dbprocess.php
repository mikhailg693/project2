<?php session_start();

$_SESSION['f'] = $f = $_POST['full_name'];
$_SESSION['s'] = $s = $_POST['student_id'];
$_SESSION['e'] = $e = $_POST['user_email'];
$_SESSION['v'] = $v = $_POST['school_event'];

//echo $f . "<br>" .
//    $s ."<br>".
//    $e ."<br>".
//    $v ."<br>";
//echo "<br>";

//mkdir('users/'.$u);

//$t = $i['tmp_name'];
//$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];
//
//
//move_uploaded_file($t,$f);

//$cnt = mysqli_connect('localhost', 'root', 'root','mhshsp3');
$cnt = mysqli_connect('localhost', 'fssa', 'Webdevfun1!','fssa');

$sql ="insert into mhshsevents (full_name, student_id, user_email, school_event) values('$f', '$s','$e','$v')";

mysqli_query($cnt, $sql);

mysqli_close($cnt);

header('location:confirmation.php');

?>