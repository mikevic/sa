<?php

require 'header.php';

?>
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
			<!--start: Row -->
	    	<div class="row">
		
				<div class="span9">
					
					<div id="about">
                    	<div class="title"><h3>Contact Us</h3></div>
                    </div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="includes/contact-form-server.php">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
									</div>
								</div>

								<div class="clearfix">
									<label for="lc"><span>Local Office you wish to contact:</span></label>
									<div class="input">
										<select name="lc" required tabindex="2" class="input-xlarge">
				                              <option value="AIESEC Monash">AIESEC Monash</option>
				                              <option value="AIESEC Nelson Mandela Metropolitan University">AIESEC Nelson Mandela Metropolitan University</option>
				                              <option value="AIESEC University of Free State">AIESEC University of Free State</option>
				                              <option value="AIESEC University of Pretoria">AIESEC University of Pretoria</option>
				                              <option value="AIESEC University of Cape Town">AIESEC University of Cape Town</option>
				                              <option value="AIESEC Stellenboch University">AIESEC Stellenboch University</option>
				                              <option value="AIESEC Witswatersrand University">AIESEC Witswatersrand University</option>
				                              <option value="AIESEC University of Johannesburg">AIESEC University of Johannesburg</option>
				                              <option value="AIESEC Rhodes University">AIESEC Rhodes University</option>
				                              <option value="Other">Other</option>
				                        </select><br>
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
								</div>
							</fieldset>

						</form>

					</div>




					
				</div>	
				
				<div class="span3">
					
					<!-- start: Sidebar -->
					<div id="sidebar">

						<!-- start: Skills -->
				       	<div class="title"><h3>AIESEC SA in Numbers</h3></div>
				       	<ul class="progress-bar">
				        	<li>
				            	<h5>8 Local Offices</h5>
				            	<div class="meter"><span style="width: 40%"></span></div><!-- Edite width here -->
				          	</li>
				          	<li>
				            	<h5>500 International Experiences</h5>
				            	<div class="meter"><span style="width: 80%"></span></div><!-- Edite width here -->
				          	</li>
				          	<li>
				            	<h5>200 TMP/TLP Experiences</h5>
				            	<div class="meter"><span style="width: 100%"></span></div><!-- Edite width here -->
				          	</li>
				          	<li>
				            	<h5>5 Conferences Anually</h5>
				            	<div class="meter"><span style="width: 60%"></span></div><!-- Edite width here -->
				          	</li>
				      	</ul>
				      	<!-- end: Skills -->

				

						<!-- start: Testimonials-->

						<?php

						require 'testimonial.php';

						?>


						<!-- end: Testimonials-->

					</div>
					<!-- end: Sidebar -->
					
				</div>
				
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">	
      		
			<hr>
		
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

<?php

require 'footer.php';

?>