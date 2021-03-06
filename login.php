<?php

require_once 'includes/header.php';

?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="config/login-config.php" method="POST">
					<span class="login100-form-title p-b-51">
						Login
					</span>

						<?php if(count($errors) > 0): ?>

						<div class="alert alert-danger">

							<?php foreach($errors as $error): ?>
								<li><?php  echo $error; ?></li>
							<?php endforeach ?>

						</div>
						
					<?php endif?>	

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" value="<?php echo $email?>" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="reset-password.php" class="txt1">
								Reset Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
							<div class="flex-sb-m w-full p-t-3 p-b-24">

						<div>
							 Don't have an Account Yet?<a href="register.php" class="txt1">
							Signup Here!
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php

require_once 'includes/footer.php';

?>
