<?php
session_start();
setcookie("China","Nihao",time()+130);
$_SESSION['username'] = "Martin";
$_SESSION['userlastname'] = "Li";
$_SESSION['date'] = "01-10-2021";
$phpVariable = "Dog";
?>
<html>
   <head>
   <title>My site Jiajun Li</title>
   </head>
   <body>
    <form action="nextpage.php" method="post">
	<input type="text" name="email">
        <input type="text" name="username">
        <input type="text" name="userlastname">
        <input type="submit" name="submit">
    </form>

<?php
$myfavmusic = urlencode("Made in china");
echo "<a href='nextPage.php?favmusic=$myfavmusic'>";
echo "Click here to see information about my favorite music";
echo"</a>";
?>

</body>
</html>

