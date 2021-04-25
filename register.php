<?php

require_once 'includes/header.php';

?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="config/register-config.php" method="POST">
			
                    <h3 class="lead">User Register Here</h3>

					<?php if(count($errors) > 0): ?>

						<div class="alert alert-danger">

							<?php foreach($errors as $error): ?>
								<li><?php  echo $error; ?></li>
							<?php endforeach ?>

						</div>
						
					<?php endif?>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Name is required">
						<input class="input100" type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Full Name">
						
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email"  value="<?php echo $email; ?>" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="c_pass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>


                    	<div class="flex-sb-m w-full p-t-3 p-b-5">

						<div>
							Already Registered ?<a href="login.php" class="txt1">
								Login
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

<?php

require_once 'includes/footer.php';

?>
