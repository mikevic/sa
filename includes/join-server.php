<?php

require 'dbconnect.inc.php';

$name = trim(mysql_escape_string($_POST['first_name']));
$phone = trim(mysql_escape_string($_POST['phone']));
$email = trim(mysql_escape_string($_POST['email']));
$age = trim(mysql_escape_string($_POST['age']));
$university = trim(mysql_escape_string($_POST['university']));
$lc = trim(mysql_escape_string($_POST['lc']));
$prog = trim(mysql_escape_string($_POST['prog']));

switch ($lc) {
	case 'AIESEC Monash':
		$contact_email = 'khanyisile.gumbi@aiesec.net';
		break;

	case 'AIESEC Nelson Mandela Metropolitan University':
		$contact_email = 'mawethusoga@gmail.com ';
		break;

	case 'AIESEC University of Free State':
		$contact_email = '2009276549@ufs4life.ac.za';
		break;

	case 'AIESEC University of Pretoria':
		$contact_email = 'zaq.mzale240@aiesec.net';
		break;

	case 'AIESEC University of Cape Town':
		$contact_email = 'cvdandajena@gmail.com';
		break;

	case 'AIESEC Stellenbosch University':
		$contact_email = 'Parv.chauhan@aiesec.net';
		break;

	case 'AIESEC Witswatersrand University':
		$contact_email = 'tiisetso.murray@aiesec.net';
		break;

	case 'AIESEC University of Johannesburg':
		$contact_email = 'atang.mapena@aiesec.net';
		break;
	
	case 'AIESEC Rhodes University':
		$contact_email = 'southafrica@aiesec.net';
		break;

	default:
		$contact_email = 'southafrica@aiesec.net';
		break;
}

$res = mysqli_query($mysqli, "INSERT into registrations (`name`, `phone`, `email`, `age`, `university`, `lc`, `prog`) VALUES ('$name', '$phone', '$email', '$age', '$university', '$lc', '$prog')");


$to = $contact_email.',southafrica@aiesec.net';
$subject = "Registration on aiesec.co.za";
$message = "New registration on aiesec.co.za. /n Name : ".$name."/n Phone : ".$phone."email : ".$email."/n Age :".$age."/n University : ".$university."/n LC : ".$lc."/n Programme : ".$prog;
$from = "contact-form@aiesec.co.za";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
header('Location: ../thank-you.php');
?>