<?php
require 'functions.inc.php';
require 'dbconnect.inc.php';

$name = safe($_POST['person_name']);
$position = safe($_POST['position']);
$text = safe($_POST['text_field']);
$res1 = mysqli_query($mysqli, "INSERT into testimonials (`name`, `position`, `testimonial`) VALUES ('$name', '$position', '$text')");
echo mysqli_error($mysqli);
echo 'Your testimonial has been added to the database!';

?>