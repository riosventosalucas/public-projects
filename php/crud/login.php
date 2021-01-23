<?php 

include_once('templates/header.php');

?>

<div class="container mt-5">
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<div class="text-center">
						<h3>Login</h3>
					</div>
				</div>
				<div class="card-body">
					<form action="views/user.php" method="POST">
						<div class="form-group mb-3">
							<label>Email:</label>
							<input class="form-control" type="email" name="username" required>
						</div>
						<div class="form-group mb-3">
							<label>Password:</label>
							<input class="form-control" type="password" name="password" required>
						</div>
						<div class="form-group mb-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-block btn-primary" name="user" value="login">Sign In</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

include_once('templates/footer.php');

?>