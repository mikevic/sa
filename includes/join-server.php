<?php

require 'dbconnect.inc.php';

$name = trim(mysql_escape_string($_POST['first_name']));
$phone = trim(mysql_escape_string($_POST['phone']));
$email = trim(mysql_escape_string($_POST['email']));
$age = trim(mysql_escape_string($_POST['age']));
$university = trim(mysql_escape_string($_POST['university']));
$lc = trim(mysql_escape_string($_POST['lc']));
$prog = trim(mysql_escape_string($_POST['prog']));

$res = mysqli_query($mysqli, "INSERT into registrations (`name`, `phone`, `email`, `age`, `university`, `lc`, `prog`) VALUES ('$name', '$phone', '$email', '$age', '$university', '$lc', '$prog')");
header('Location: ../thank-you.php');

$monash_tm = "monique.prinsloo@aiesec.net";


?>