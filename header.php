<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$current_page =  $parts[count($parts) - 1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<?php
$title = 'AIESEC South Africa';
if($current_page == 'about-aiesec.php')
{
	$title = "About AIESEC";	
}
else if($current_page == 'about-aiesec-south-africa.php')
{
	$title = "About AIESEC South Africa";	
}
else if($current_page == 'gcdp_ep_contract.php')
{
	$title = "Exchange Participant Contract";	
}
else if($current_page == 'gcdp_ep_submit_details.php')
{
	$title = "Exchange Participant Registration";	
}
else if($current_page == 'join-aiesec.php')
{
	$title = "Join AIESEC";
}
else if($current_page == 'contact.php')
{
	$title = "Contact Us";
}

?>
	<title><?php echo $title ?></title> 
	<meta name="description" content="Smart Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span4">
						
					<img src="img/aiesec_south_africa_logo.png" style="padding-top:13px">
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span8">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li <?php if($current_page == 'index.php'){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
                                    <li <?php if($current_page == 'about-aiesec.php' || $current_page == 'about-aiesec-southafrica.php'){echo 'class="active dropdown"'; } ?>>
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
											<li><a href="about-aiesec.php">About AIESEC</a></li>
                                            <li><a href="about-aiesec-south-africa.php">About AIESEC South Africa</a></li>
			                			</ul>
			              			</li>							
			              			<li <?php if($current_page == 'join-aiesec.php'){echo 'class="active"';} ?>><a href="join-aiesec.php">Join AIESEC</a></li>
			              			<li <?php if($current_page == 'contact.php'){echo 'class="active"';} ?>><a href="contact.php">Contact Us</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
		</div>
	</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i><?php echo $title ?></h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->