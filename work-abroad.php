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
                    	<div class="title"><h3>Sign up to work abroad</h3></div>
                    	<p>Thank you for your interest in joining AIESEC. Providing the following information will allow your local AIESEC office to get in touch with you and provide you with the details of their local recruiting process.</p>
						<p>Details of our program : </p>
						<ul class="tabs-nav">
							<li class="active" style=""><a href="#tab1"><i class="mini-ico-search"></i>Process</a></li>
							<li class=""><a href="#tab2"><i class="mini-ico-shopping-cart"></i>Costs</a></li>
							<li class=""><a href="#tab3"><i class="mini-ico-time"></i>Timeline</a></li>
						</ul>

						<div class="tabs-container">
							<div class="tab-content" id="tab1" style="display: block;">
								<ol>
									<li>You submit your CV</li>
									<li>We conduct an initial interview to ascertain your skills, ability to handle culture shock, travel alone, etc</li>
									<li>You’re approved and pay the initial admin fee to AIESEC UCT (ZAR 1000) which covers all our administrative costs of maintaining a global network of partners and interns</li>
									<li>You are raised onto our internal IT platform (myaiesec.net) which is our database of all interns and internships</li>
									<li>Our OGX (Outgoing Exchange) team will begin the matching process of finding you a suitable internship</li>
									<li>Once an internship is found with which you are happy and the NGO/partner organisation is happy you are matched</li>
									<li>You pay the second and final admin fee to AIESEC UCT (R1000 for Community Development, R2,500 for professional internships)</li>
									<li>You buy your flight tickets and apply for your visa (we will provide invitation letter and assistance where necesary)</li>
									<li>You attend a preparation workshop with other interns on what to expect</li>
									<li>You experience awesomeness</li>
								</ol>
							</div>
							<div class="tab-content" id="tab2" style="display: none;">
								<p>Many people are unsure of the costs involved in an AIESEC internship. Let’s clear hat up.</p>
								<P><ul><strong>AIESEC is a not-for-profit organisation.</strong><ul></p>
								<p>At the local level none of us are being paid for the time we put in. We have a national team of two dedicated AIESECers that are based in Johannesburg who have moved there from their home countries and dedicate their life to running and managing AIESEC South Africa. They receive accommodation and a small salary from AIESEC South Africa.</p>
								<p>Then there is AIESEC International, our global parent body. This team of young leaders is based in Rotterdam in the Netherlands. They are from all over the world and also receive accommodation and a small salary from AIESEC.</p>
								<p>Vitally, all the funds we receive and raise through sponsorship go primarily toward maintaining our global network. This involves our IT platform, a massive database of interns and internships as well as HR management. This also involves all our leadership development and marketing, that is conferences, posters, banners, etc.</p>
								<p>Some people feel uneasy about paying for an internship, and we get that. But don’t worry, we are in fact a registered NPO and are audited every year. AIESEC International publishes an annual report including financials every year as well.</p>
								<p>Apart from the small admin fee to AIESEC (total of R2000 in two payment for the global community development internships) you will have to cover the costs of your travel insurance, visa (if required) and flights.</p>
								<P>Usually you will receive accommodation and food during your internship, however sometimes one of those two may be substituted for local transport. All of this will be made clear in your job description before you are matched and you will know all the details well in advance.</P>
								<p>If you want to travel around the country during your internship you may do so before or after the internship starts or ends (or even during if you have a lenient employer), but again these costs will be up to you to cover. You will often find other interns to travel with as there are usually quite a few interns working on the same projects at any given time.</p>
							</div>
							<div class="tab-content" id="tab3" style="display: none;">
								Our peak periods are June and December as these are the university holidays. However AIESEC has internships available all year long and you are free to start whenever you are ready, dependent on the internship start date of course. Generally we would interview you at least 3 months before the internship starts, allowing sufficient time for your first payment after which we would match you, so that you are matched a minimum of 6 weeks, preferably 2 months before the internship start date. This is when you buy your flight tickets and arrange your visa and make your second payment.							
							</div>						
						</div>
                    </div>
                    <p>Now that you have all the details, fill up this form to apply!</p>
					<form method="POST" action="includes/join-server.php">
						<div class="row">
							<div class="span5">
							<label>Name : </label><input type="text" placeholder="Required" name="first_name" required>		
							<label>Phone No. : </label><input type="text" placeholder="Required" name="phone" required>
							<label>Email : </label><input type="email" placeholder="Required" name="email" required>	
							<label>Age : </label><input type="text" placeholder="Required" name="age" required>	
							<label>University : </label><input type="text" placeholder="Required" name="university" required>
							</div>
							<div class="span4">		
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
	                              <option value="GCDP">International Internship [Undergraduate] - Global Community Development Programme</option>
	                              <option value="GIP">International Internship [Graduates] - Global Internship Programme</option>
	                        </select><br>
	                        <button type="submit" class="btn">Submit</button>	
	                        </div>	
	                    </div>	
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