<?php
    include("master-template/header.php");
?>
        <!-- Home Slider Start -->
		<div class="dc-innerbanner-holder dc-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="dc-innerbanner">
							<form class="dc-formtheme dc-form-advancedsearch dc-innerbannerform">
								<fieldset>
									<div class="form-group">
										<input type="text" name="search" class="form-control" placeholder="Search doctors, clinics, hospitals, etc.">
									</div>
									<div class="form-group">
										<div class="dc-select">
											<select>
												<option value="Location">Location*</option>
												<option value="United State">United State</option>
												<option value="Canada">Canada</option>
												<option value="England">England</option>
												<option value="Switzerland">Switzerland</option>
												<option value="New Zealand">New Zealand</option>
											</select>
										</div>
									</div>
									<div class="dc-btnarea">
										<a href="javascript:void(0);" class="dc-btn">Search</a>
									</div>
								</fieldset>
							</form>
							<a href="javascript:void(0);" class="dc-docsearch"><span class="dc-advanceicon"><i></i> <i></i> <i></i></span><span>Advanced <br>Search</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="dc-advancedsearch-holder">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="dc-advancedsearchs">
								<form class="dc-formtheme dc-form-advancedsearchs">
									<fieldset>
										<div class="form-group">
											<div class="dc-select">
												<select>
													<option value="Availability">Availability</option>
													<option value="Availability">morning</option>
													<option value="Availability">evening</option>
													<option value="Availability">night</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="dc-select">
												<select>
													<option value="Fee">Consultation Fee</option>
													<option value="Fee">20 $</option>
													<option value="Fee">22 $</option>
													<option value="Fee">18 $</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="dc-typeoptions">
												<span>Type:</span>
												<div class="dc-select">
													<select>
														<option value="Show">Show All</option>
														<option value="Show">Neurosurgeon</option>
														<option>Dermatologists</option>
														<option>Gastroenterologists</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<span class="dc-checkbox">
												<input id="dc-show" type="checkbox" name="show">
												<label for="dc-show">Show Nearest Only</label>
											</span>
										</div>
										<div class="dc-btnarea">
											<a href="javascript:void(0);" class="dc-btn dc-resetbtn">Reset Filters</a>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Home Slider End -->
		<!-- breadcrumbarea start -->
		<div class="dc-breadcrumbarea">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="dc-breadcrumb">
							<li><a href="index-2.html">Home</a></li>
							
							<li> Contact</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbarea End -->
		<!-- Main Start -->
		<main id="dc-main" class="dc-main dc-haslayout">
			<div class="dc-haslayout dc-main-section dc-ourcontact-holder">
				<!-- Error 404 Start-->
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="dc-cntctfrmdetail">
								<div class="dc-title">
									<h3><span>Always Get In Touch</span> Our Contact Details</h3>
								</div>
								<div class="dc-description">
									<p>Amet consectetur adipisicing eliteiuim sete eiuode tempor incint utoreas etnalom dolore maena aliqua udiminimate veniam quis norud exerciton ullamco laboris nisiquip commodo lokate.</p>
								</div>
								<ul class="dc-formcontactus">
									<li><address><i class="lnr lnr-location"></i> 123 New Street, Melbourne location  Australia 54214</address></li>
									<li><a href="javascript:void(0)"><i class="lnr lnr-envelope"></i> info@domainurl.com</a></li>
									<li><span><i class="lnr lnr-phone-handset"></i> +1(646)5554099</span></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="dc-contactvone">
								<div class="dc-title">
									<h4>Say “Hello” To Us</h4>
								</div>
								<form class="dc-formtheme dc-medicalform">
									<fieldset>
										<div class="form-group">
											<input type="text" name="search" value="" class="form-control" placeholder="Your Name*" required="">
										</div>
										<div class="form-group">
											<input type="text" name="search" value="" class="form-control" placeholder="Your Email*" required="">
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Type Your Query*"></textarea>
										</div>
										<div class="form-group dc-btnarea">
											<button type="submit" value="Submit" class="dc-btn">Send Now</button>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Error 404 End-->
			</div>
			<div class="dc-haslayout dc-shadedmap">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div id="dc-thememap" class="dc-thememap dc-locationmap"></div>	
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!-- Emerging Clients End -->
		</main>
		<!-- Main End -->
		<?php
    include("master-template/footer.php");
?>