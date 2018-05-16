<?php
	include 'includes/header.php';
?>

<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!--<div class="signup">-->
	<!--<h1><strong>Sign Up</strong></h1>-->
	<!--	<form class="signup-form" action="includes/signup.inc.php" method="POST">-->
	<!--		<input type="email" name="email" placeholder="email" required>-->
	<!--		<input type="text" name="username" placeholder="username" required>-->
	<!--		<input type="password" name="password" placeholder="password" required>-->
	<!--		<input type="password" name="REpassword" placeholder="confirm password" required>-->
	<!--		<input type="submit" name="submit" value="submit">-->
	<!--	</form>-->
	<!--</div>-->
	
	
	</br>
		

		<div class="container">
			<div class="row">
				<div class="col-md-5 m-x-auto pull-xs-none">
					<div class="jumbotron">
						<h2 class="h2-responsive"><strong>Sign Up</strong></h2>
						
						<!-- <hr class="m-y-2"> -->

						<!--Naked Form-->
						<div class="card-block">

							<!--Body-->
							<form class="signup-form" action="includes/signup.inc.php" method="POST">

								<!-- Basic textbox -->

								<h5 class="h5-responsive">Username</h5>
								<div class="md-form">
									<i class="fa fa-user prefix"></i>
									<input type="text" name="username" id="form2" class="form-control" required>
									<label for="form2">Your name</label>
								</div>

								<!--Email validation-->
								<h5 class="h5-responsive">E-mail</h5>
								<div class="md-form">
									<i class="fa fa-envelope prefix"></i>
									<input type="email" id="form9" class="form-control validate" name="email" required>
									<label for="form9" data-error="wrong" data-success="right">Your email</label>
								</div>

								<!--Pass with icon-->
								<h5 class="h5-responsive">Password</h5>
								<div class="md-form">
									 <i class="fa fa-pencil prefix"></i>
									<input type="password" name="password" id="form7" class="md-textarea" required></input>
									<label for="form7">Your password</label>
								</div>
								
								<h5 class="h5-responsive">Confirm Password</h5>
								<div class="md-form">
									 <i class="fa fa-pencil prefix"></i>
									<input type="password" name="REpassword" id="form7" class="md-textarea" required></input>
									<label for="form7">Enter again</label>
								</div>
								

								<div class="text-xs-left">
									<button class="btn btn-primary" type="submit" name="submit" value="submit"></button>
								</div>
							</form>

							<div class="m-y-2">
								<p class="small-text small-thin-text" style="font-weight:300">Log Out</p>
							</div>

						</div>
			

					</div>
				</div>
			</div>
      
		</div>
	

<?php
	include 'includes/footer.php';
?>
