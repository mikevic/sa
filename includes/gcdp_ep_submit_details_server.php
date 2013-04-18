<?php
require 'dbconnect.inc.php';

	$first_name = trim(mysql_escape_string($_POST['first_name']));
	$last_name = trim(mysql_escape_string($_POST['last_name']));
	$university = mysql_escape_string($_POST['university']);
	$address_line1 = mysql_escape_string($_POST['address_line1']);	
	$address_line2 = mysql_escape_string($_POST['address_line2']);
	$city = mysql_escape_string($_POST['city']);
	$state = mysql_escape_string($_POST['state']);
	$fathersname = mysql_escape_string($_POST['fathersname']);
	$fathersno = mysql_escape_string($_POST['fathersno']);
	$mothersname = mysql_escape_string($_POST['mothersname']);
	$mothernsno = mysql_escape_string($_POST['mothersno']);
	$emergency = mysql_escape_string($_POST['emergency']);
	$mobile_num = mysql_escape_string($_POST['mobile_num']);
	$email = mysql_escape_string($_POST['email']);
	$alt_email = mysql_escape_string($_POST['alt_email']);
	$passport = mysql_escape_string($_POST['passport']);
	$expiry_date = mysql_escape_string($_POST['expiry_date']);
	$aiesecername = mysql_escape_string($_POST['aiesecername']);
	$aieseceremail = mysql_escape_string($_POST['aieseceremail']);
	$aiesecercell = mysql_escape_string($_POST['aiesecercell']);
	$lc = mysql_escape_string($_POST['lc']);
	$nationality = mysql_escape_string($_POST['nationality']);
	if ($lc == 'Other'){
		$lc = mysql_escape_string($_POST['lc_other']);
	}
	$res = mysqli_query($mysqli, "INSERT into gcdp_ep_details (`first_name`, `last_name`, `university`, `address_line1`, `address_line2`, `city`, `state`, `fathersname`, `fathersno`, `mothersname`, `mothersno`, `emergencyno`, `mobile`, `email`, `alternate_email`, `passport_no`, `expiry_date`, `aiesecername`, `aieseceremail`, `aiesecercell`, `lc`, `nationality`) VALUES ('$first_name', '$last_name', '$university', '$address_line1', '$address_line2', '$city', '$state', '$fathersname', '$fathersno', '$mothersname', '$mothernsno', '$emergency', '$mobile_num', '$email', '$alt_email', '$passport', '$expiry_date', '$aiesecername', '$aieseceremail', '$aiesecercell', '$lc', '$nationality')");
	$res1 = mysqli_query($mysqli, "SELECT  `contract_id` FROM gcdp_ep_details ORDER BY  `contract_id` DESC LIMIT 1");
	$contract_id = mysqli_fetch_assoc($res1);
	
	//Uploading CV
	$cv_file_name = $contract_id['contract_id'].'_'.$first_name.$last_name.'.pdf';
	move_uploaded_file($_FILES["cv"]["tmp_name"], "../uploaded_files/gcdp-ep-cv/" . $cv_file_name);
	
	$to      = trim(mysql_escape_string($_POST['email'])).','.trim(mysql_escape_string($_POST['aieseceremail'])).',michael.victor@aiesec.net';
	$subject = 'EP Contract - '.$first_name.' '.$last_name;
	$message = 'Hey there, thank you for registering for the Global Community Development Programme with AIESEC South Africa. Your contract has been generated and is available at the following unique link : aiesec.co.za/gcdp-ep-contract.php?no='.$contract_id['contract_id'].' . Please feel free to get in touch with your AIESEC representative in case you have any doubts. A printable version of the contract is also available for your convenience.';
	$headers = 'From: contractgenerator@aiesec.co.za' . "\r\n" .
		'Reply-To: michael.victor@aiesec.net' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);

	
	header('Location: ../gcdp-ep-contract.php?no='.$contract_id['contract_id']);
?>

