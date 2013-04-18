<?php

require 'header.php';

?>
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
			<!--start: Row -->
	    	<div class="row">
					  <form action="includes/gip_ep_submit_details_server.php" method="post" enctype="multipart/form-data" >
					  <div class="span6">
                          <div class="title"><h3>Personal Details</h3></div>
                          <label>First name : </label><input type="text" name="first_name" required>
                          <label>Last name : </label><input type="text" name="last_name" required>
                          <label>University : </label><input type="text" name="university" required>
                          <label>Address Line 1 : </label><input type="text" name="address_line1" required>
                          <label>Address Line 2 : </label><input type="text" name="address_line2" required>
                          <label>City : </label><input type="text" name="city">
                          <label>State : </label>
                          <select name="state" required>
                              <option value="Mpumalanga">Mpumalanga</option>
                              <option value="Gauteng">Gauteng</option>
                              <option value="Limpopo">Limpopo</option>
                              <option value="KwaZulu Natal">KwaZulu Natal </option>
                              <option value="Free State ">Free State </option>
                              <option value="Western Cape">Western Cape</option>
                              <option value="Eastern Cape">Eastern Cape</option>
                              <option value="Northern Cape">Northern Cape</option>
                              <option value="North West Province">North West Province</option>
                          </select>
                          <label>Nationality : </label><input type="text" name="nationality">
                          <hr>
                          <label>Father/Mother/Guardian Name :</label><input type="text" name="fathersname" required/>
                          <label>Father/Mother/Guardian Phone Number :  </label><input type="text" name="fathersno" />
                          <label>Emergency Contact Num : </label><input type="text" name="emergency" required/>
                          <hr>
                          <label>Mobile Number : </label><input type="text" name="mobile_num" required/>
                          <label>Email Address : </label><input type="email" name="email" required/>
                          <label>Alternate Email Address : </label><input type="email" name="alt_email" />
                          <hr>
                          <label>Passport Number : </label><input type="text" name="passport" required />
                          <label>Expiry Date : </label><input type="date" name="expiry_date" required/>                          
                      </div>
                      <div class="span6">
                      <div class="title"><h3>AIESEC Details</h3></div>
                      <label>AIESEC Responsible Name :</label><input type="text" name="aiesecername" required/>
                      <label>AIESEC Responsible Email : </label><input type="email" name="aieseceremail" required/>
                      <label>AIESEC Responsible Mobile : </label><input type="text" name="aiesecercell" required/>
                      <label>AIESEC Local Chapter : </label>
                      <select name="lc" required>
                              <option value="AIESEC Monash">Monash</option>
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
                      If other, please specify <br>
                      <input type="text" name="lc_other"/>
                      <div class="title"><h3>Upload Files</h3></div>
                      <label>CV : </label>Upload your latest CV in PDF Format. This <a href="https://europass.cedefop.europa.eu/editors/en/cv-esp/upload" target="_blank">site</a> may help in doing so.<br><input type="file" accept="application/pdf" name="cv" required><br ><br>

                      <hr>
                      <input type="submit" class="btn" value="Generate EP Contract">
                      </div>
                      </form>
                </div>
            </div>
						
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

<?php

require 'footer.php';

?>