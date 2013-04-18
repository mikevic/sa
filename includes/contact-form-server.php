<?php
$name = $_POST['name'];
$email = $_POST['email'];
$lc = $_POST['lc'];
$message = $_POST['body'];
switch ($lc) {
	case 'AIESEC Monash':
		$lcp_email = 'nyiko.mthembi@aiesec.net';
		break;

	case 'AIESEC Nelson Mandela Metropolitan University':
		$lcp_email = 'mawethusoga@gmail.com';
		break;
	
	case 'AIESEC University of Free State':
		$lcp_email = 'natasha.yeukai@aiesec.net';
		break;

	case 'AIESEC University of Pretoria':
		$lcp_email = 'danila.molgy@aiesec.net';
		break;

	case 'AIESEC University of Cape Town':
		$lcp_email = 'michael.hubbard@aiesec.net';
		break;

	case 'AIESEC Stellenboch University':
		$lcp_email = 'anika.cooke@aiesec.net';
		break;

	case 'AIESEC Stellenboch University':
		$lcp_email = 'anika.cooke@aiesec.net';
		break;

	case 'AIESEC Witswatersrand University':
		$lcp_email = 'tiisetsomurray@gmail.com';
		break;

	case 'AIESEC University of Johannesburg':
		$lcp_email = 'captain.s@aiesec.net';
		break;

	case 'AIESEC Rhodes University':
		$lcp_email = 'rahul.maira@aiesec.net';
		break;

	case 'Other':
		$lcp_email = 'rahul.maira@aiesec.net';
		break;

	default:
		# code...
		break;
}



	$to      = $lcp_email.',michael.victor@aiesec.net';
	$subject = 'Contact Form - '.$name;
	$headers = 'From: contact-form@aiesec.co.za' . "\r\n" .
		'Reply-To: '.$email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);

	header('Location: ../thank-you.php');

?>