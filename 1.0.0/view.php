 <?php
include 'dbconnect.php';

$sql_select = "SELECT * FROM POSTSTORY WHERE id = " . $_GET['id'];

$resultSelect= mysqli_query($conn,$sql_select);
?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='nav1'>
<nav>
<img id='pic1' src='https://pbs.twimg.com/media/DsodSiGVsAAEqM2.jpg' width='20px'></img>
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

<?php

while ($row = mysqli_fetch_assoc($resultSelect)) {
    echo 'By ' . $row["uid"];
    echo '<br />' . $row["Title"];
    echo '<hr>';
    echo '<br />' . nl2br($row['message']);
}
?>

</body>
</html>