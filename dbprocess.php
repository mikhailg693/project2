<?php session_start();

$_SESSION['f'] = $n = $_POST['fullname'];
$_SESSION['s'] = $e = $_POST['studentid'];
$_SESSION['e'] = $u = $_POST['email'];
$_SESSION['v'] = $p = $_POST['events'];

echo $f . "<br>" .
    $s ."<br>".
    $e ."<br>".
    $v ."<br>";
//echo "<br>";

//mkdir('users/'.$u);

//$t = $i['tmp_name'];
//$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];
//
//
//move_uploaded_file($t,$f);

$cnt = mysqli_connect('localhost', 'root', 'root','mhshsp3');

$sql ="insert into mhshsevents (fullname, studentid, email, events) values('$f', '$s','$e','$v')";

mysqli_query($cnt, $sql);

mysqli_close($cnt);

header('location:confirmation.php');

?>