<?php 
 /*
 Template Name: contact-us
 */
 get_header();

dynamicPageBanner(array(
    'title' => 'contact us',
    'subtitle'  => 'Customer serfvices is 24/7'
));


?>

<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="Name">Name</label>
					      <input type="text" class="form-control" id="Name" >
					    </div>
					    <div class="form-group col-md-6">
					      <label for="lastname">Last Name</label>
					      <input type="text" class="form-control" id="lastname">
					    </div>
					  </div>

					 <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="Email" class="form-control" id="inputEmail4">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPone">Phone</label>
					      <input type="number" class="form-control" id="inputPone">
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="form-grup col-4">
			  				
				            <label  class="form-check-label mylabel" for="gridRadios">General
				            	<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios">
				            </label>
				           
					  	</div>
					  	<div class="form-grup col-4">
			  				
				          <label class="form-check-label mylabel" for="gridRadios1">Sales
				          		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1">
				          </label>
				          
					  	</div>
					  	<div class="form-grup col-4">
			  				
				          <label class="form-check-label mylabel" for="gridRadios3">Query 
				          		<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3">
				          </label>
				          
					  	</div>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Message</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  
					  
					  <button type="submit" class="btn btn-primary greenbtn">Send</button>
					</form>
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d944.5370515758722!2d46.79846903594373!3d24.77852697348149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f003aa92d6ff1%3A0x6ee50bd890e1efb!2z2KfZhNir2KfZhtmI2YrYqSDYp9ir2YbZitmGINmIINin2LHYqNi52YrZhiAo2aTZoikg2KjZhtin2KogLdit2Yog2KfZhNiu2YTZitisIC0g2KfZhNix2YrYp9i2!5e1!3m2!1sen!2seg!4v1571153929631!5m2!1sen!2seg"
				 width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				   
			</div>
		</div>
	</div>
<?php
get_footer();
?>