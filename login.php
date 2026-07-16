<?php
include("master-template/header.php")
?>     
                                  
                                  <div class="dc-loginarea">
									<div class="dc-loginoption">
										<!--<a href="javascript:void(0);" id="dc-loginbtn" class="dc-loginbtn">Login</a>-->
										<div class="dc-loginformhold">
											<div class="dc-loginheader">
												<span>Login</span>
												<a href="javascript:;"><i class="fa fa-times"></i></a>
											</div>
											<form class="dc-formtheme dc-loginform do-login-form">
												<fieldset>
													<div class="form-group">
														<input type="text" name="name" class="form-control" placeholder="Username">
													</div>
													<div class="form-group">
														<input type="password" name="password" class="form-control" placeholder="Password">
													</div>
													<div class="dc-logininfo">
														<span class="dc-checkbox">
															<input id="dc-login" type="checkbox" name="rememberme">
															<label for="dc-login">Keep me logged in</label>
														</span>
														<a href="javascript:;" class="dc-btn do-login-button">Login</a>
													</div>
												</fieldset>
												<div class="dc-loginfooterinfo">
													<a href="javascript:;" class="dc-forgot-password">Forgot password?</a>
													<a href="javascript:void(0);">Create account</a>
												</div>
											</form>
										    <form class="dc-formtheme dc-loginform do-forgot-password-form dc-hide-form">
										        <fieldset>
										            <div class="form-group">
										                <input type="email" name="email" class="form-control get_password" placeholder="Email">
										            </div>
										           
										            <div class="dc-logininfo">
										                <a href="javascript:;" class="dc-btn do-get-password">Get Pasword</a>
										            </div>     
										        </fieldset>
										        <div class="dc-loginfooterinfo">
										            <a href="javascript:void(0);" class="dc-show-login">Login</a>
										            <a href="javascript:void(0);">Create account</a>
										        </div>
										    </form>
										</div>
									</div>
									<!--<a href="register.html" class="dc-btn">Join Now</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

            

            <?php
include("master-template/footer.php")
?>