<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {

    $uid = isset($_POST['uid']) && $_POST['uid'] > 0 ? $_POST['uid'] : 12345;
    $title = $_POST['title'];
    $message = $_POST['message'];

    $sql = "INSERT INTO poststory (uid, Title, message) VALUES ('" . $uid . "', '" . $title . "', '" . $message . "')";
    $result = mysqli_query($conn,$sql);
	header('Location: index.php');
exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='nav1'>
<nav>
<img id='pic1'src='https://pbs.twimg.com/media/DsodSiGVsAAEqM2.jpg' width='20px'></img>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="add.php">Write a Story</a></li>
<li><a href="list.php">Read Stories</a></li>
<li><a href="leaderboard.php">Leaderboard</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
<br>

<form class='seg2' method='POST'>
    <input type='hidden' name='uid' value='unknown user' >
 <textarea class='title' name='title' placeholder='Title......'></textarea> <br> <br>
    <textarea class='message' name='message' placeholder='Write your Story here......'></textarea>  <br>
    <button name='submit' class='subbutton' type='submit'>Submit Story</button>
</form>


</body>
</html>