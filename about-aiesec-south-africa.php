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
                    	<div class="title"><h3>About AIESEC South Africa</h3></div>
                    	<p>Something about AIESEC in South Africa here.</p>
                    </div>

					<!-- start: Team -->	
					<div id="team">
						
						<div class="title"><h3>National Team</h3></div>
						
						<!-- start: Row -->
						<div class="row">
						
							
						
						</div>
						<!-- end: Row -->

					</div>
					<!-- end: Team -->
					
					
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
		
			<!-- start Clients List -->	
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>		
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
		
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

<?php

require 'footer.php';

?>