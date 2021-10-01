<?php
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : "";
$userlastname      = isset($_POST['userlastname']) ? $_POST['userlastname'] : "";
$email       = isset($_POST['email']) ? $_POST['email'] : "";
echo "Username: ".$username;
echo "Email: ".$email;
echo "Userlastname: ".$userlastname;

echo $_SESSION['username'];
echo "<br/>";
echo $_SESSION['userlastname'];
echo "<br/>";
echo $_SESSION['date'];
echo "<br/>";

echo"Ni Hao";
echo $_COOKIE["China"];
echo "<br/>";
echo "My favorite music is";
echo $_GET['favmusic'] ?? 'nothing';
$musicrate = 6;
echo "My music rating for this music is:";
echo $musicrate;

date_default_timezone_set('Europe/Madrid');
$month = date('n');
if ($month == 10) { echo 'We are in october'; }
?>



