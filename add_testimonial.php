<?php

require 'header.php';

?>
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
			<!--start: Row -->
	    	<div class="row">
		
				<div class="span9">
					
					<div id="about">
						<div class="title"><h2>Add Testimonial</h2></div>
						<div id="testi_form">
						    <form id="add_testimonial">
						    <label>Name : </label><input type="text" name="person_name">
						    <label>Position : </label><input type="text" name="position" id="position">
						    <label>Text : </label><textarea id="text_field" rows="4" name="text_field" ></textarea><div id="charNum">​</div>
						    <button type="submit" class="btn">Submit</button>
						    </form>
						</div>
					    <div id="result"></div>
					</div>
					
				
			</div>
			
		</div>
		<!--end: Row-->

	</div>
	<!--end: Container-->
<!-- Page specific Java Script -->

<?php

require 'footer.php';

?>