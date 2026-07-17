<?php
    include("master-template/header.php");
?>
		<!-- breadcrumbarea start -->
		<div class="dc-breadcrumbarea">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="dc-breadcrumb">
							<li><a href="index-2.html">Home</a></li>
							<li>Registration</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbarea End -->
		<!--Main Start-->
		<main id="dc-main" class="dc-main dc-haslayout dc-innerbgcolor">
			<!--Register Form Start-->
			<div class="dc-haslayout dc-main-section">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
							<div class="dc-registerformhold">
								<div class="dc-registerformmain">
									<div class="dc-registerhead">
										<div class="dc-title">
											<h3>Join For a Good Start</h3>
										</div>
<!-- 										<div class="dc-description">
											<p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina</p>
										</div> -->
									</div>
									<div class="dc-joinforms">
										<form class="dc-formtheme dc-formregister" method="POST" action="php/register.php">
											<fieldset class="dc-registerformgroup">
												<div class="form-group form-group-half">
													<input type="text" name="fname" class="form-control" placeholder="First Name">
												</div>
												<div class="form-group form-group-half">
													<input type="text" name="lname" class="form-control" placeholder="Last Name">
												</div>
												<div class="form-group">
													<input type="text" name="email" class="form-control" placeholder="Email">
												</div>
											</fieldset>

											<fieldset class="dc-registerformgroup">
												<div class="form-group">
													<span class="dc-select">
														<select class="chosen-select locations" data-placeholder="City" name="cities">
															<option value="" disabled selected>Select City</option>
															<?php
															$cities = mysqli_query($con, "SELECT * FROM cities WHERE status=1 ORDER BY city_name");
															while($city = mysqli_fetch_assoc($cities))
															{
															?>
																<option value="<?= $city['id']; ?>">
																	<?= $city['city_name']; ?>
																</option>
															<?php
															}
															?>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half">
													<input type="password" name="password" class="form-control" placeholder="Password*">
												</div>
												<div class="form-group form-group-half">
													<input type="password" name="password" class="form-control" placeholder="Retype Password*">
												</div>
											</fieldset>
											<fieldset class="dc-formregisterstart">
												<div class="dc-title dc-formtitle"><h4>Start as :</h4></div>
												<ul class="dc-startoption">
													<li>
														<span class="dc-radio">
															<input id="dc-regularuser" type="radio" name="typejoin" value="2">
															<label for="dc-regularuser">Patient</label>
														</span>
													</li>
													<li>
														<span class="dc-radio">
															<input id="dc-doctor" type="radio" name="typejoin" value="3">
															<label for="dc-doctor">Doctor</label>
														</span>
													</li>
												</ul>
											</fieldset>
												<div class="form-group dc-btnarea">
													<button type="submit" value="Submit" class="dc-btn" name="btnsignup">Send Now</button>
												</div>
										</form>
									</div>
								</div>
								<div class="dc-registerformfooter">
									<span>Already Have an Account? <a href="javascript:void(0);">Login Now</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Register Form End-->
		</main>
		<!--Main End-->

	</div>
	<!--Wrapper End-->
	<script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jRate.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from envato.amentotech.com/html/doclist/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jul 2026 14:49:47 GMT -->
</html>

<?php
    include("master-template/footer.php");
?>