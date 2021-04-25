<?php
	require_once "includes/header.php"

?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w">
             
					<span>Enter your Email below to get a password rest link</span><br><br>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="reset">
							Reset Password
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

<?php
	require_once "includes/footer.php"

?>
