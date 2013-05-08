<?php
require_once 'includes/dbconnect.inc.php';
$res1 = mysqli_query($mysqli, "SELECT * from testimonials");
?>
<div class="testimonial-container">

						<div class="title"><h3>Testimonials</h3></div>

							<div class="testimonials-carousel" data-autorotate="3000">

								<ul class="carousel">

<?php
while ($testimonial = mysqli_fetch_assoc($res1)) {
?>

									<li class="testimonial">
										<div class="testimonials"><?php echo $testimonial['testimonial']; ?></div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author"><?php echo $testimonial['name']; ?>, <span><?php echo $testimonial['position']; ?></span></div>
									</li>
<?php
}
?>

								</ul>

							</div>

						</div>