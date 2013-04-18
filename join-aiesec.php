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
                    	<div class="title"><h3>Join AIESEC</h3></div>
                    	<p>Thank you for your interest in joining AIESEC. Providing the following information will allow your local AIESEC office to get in touch with you and provide you with the details of their local recruiting process.</p>
                    </div>

					<form method="POST" action="includes/join-server.php">
						<label>Name : </label><input type="text" placeholder="Required" name="first_name" required>		
						<label>Phone No. : </label><input type="text" placeholder="Required" name="phone" required>
						<label>Email : </label><input type="email" placeholder="Required" name="email" required>	
						<label>Age : </label><input type="text" placeholder="Required" name="age" required>	
						<label>University : </label><input type="text" placeholder="Required" name="university" required>		
						<label>Nearest Local Chapter : </label>
   						<select name="lc" required>
                              <option value="AIESEC Monash">AIESEC Monash</option>
                              <option value="AIESEC Nelson Mandela Metropolitan University">AIESEC Nelson Mandela Metropolitan University</option>
                              <option value="AIESEC University of Free State">AIESEC University of Free State</option>
                              <option value="AIESEC University of Pretoria">AIESEC University of Pretoria</option>
                              <option value="AIESEC University of Cape Town">AIESEC University of Cape Town</option>
                              <option value="AIESEC Stellenbosch University">AIESEC Stellenbosch University</option>
                              <option value="AIESEC Witswatersrand University">AIESEC Witswatersrand University</option>
                              <option value="AIESEC University of Johannesburg">AIESEC University of Johannesburg</option>
                              <option value="AIESEC Rhodes University">AIESEC Rhodes University</option>
                        </select>	
                        <label>Which of AIESEC's programmes are you most interested in?</label>	
                        <select name="prog" required>
                              <option value="TMP">Getting involved as a member - Team Member Programme</option>
                              <option value="TLP">Gaining leadership experience - Team Leader Programme</option>
                              <option value="GCDP">International Internship [Undergraduate] - Global Community Development Programme</option>
                              <option value="GIP">International Internship [Graduates] - Global Internship Programme</option>
                        </select><br>
                        <button type="submit" class="btn">Submit</button>			
					</form>
					
					
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