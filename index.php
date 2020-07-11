	<?php
		include("includes/header.php");
	?>
		<title>Login and Sign up Demo</title>
	</head>
	<body>
	
		<!-- Jumbotron -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="jumbotron jumbotron-fluid">
						<div class="col-md-12">
							<button class="btn btn-info btn-sm btn-block" id="header"><h5>Simple Sign up and Login Demo</h5></button>
							<br />
						</div>
						&rarr;This is a tutorial to build a basic sign up and login system using HTML, CSS, PHP, MySQL <br />
						&rarr;I assume you already know Bootsrap
						<br />
						<br />
						<strong>By: Gerald (JayJe),</strong>
						
						<br />
						<hr />
						<div>
							<button class="btn btn-danger btn-block" data-target="#signupModal" data-toggle="modal">Sign up</button>
						</div>
						<br />
						<div>
							<button class="btn btn-info btn-block" data-target="#loginModal" data-toggle="modal">Login</button>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
		<!--Sign up Modal-->
		<div class="modal" id="signupModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--Header-->
					<div class="modal-header">
				
					</div>
					<!--Body-->
					<div class="modal-body">
						<form class="form-signin" action = "#" method="POST">
							<h3 class="form-signin-heading">Fill in your Details & Sign UP!</h3>
							<label for="inputEmail" class="sr-only">Email address</label>
							<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
							<br />
							<label for="inputUserName" class="sr-only">Username</label>
							<input type="text" id="inputUserName" class="form-control" placeholder="One word for your user name" required autofocus>
							<br />
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
							<br />
							<label for="inputPasswordRepeat" class="sr-only">Repeat Password</label>
							<input type="password" id="inputPasswordRepeat" class="form-control" placeholder="Repeat Password" required>
							<br />
							
							<button class="btn btn-lg btn-danger btn-block" type="reset">RESET FIELDS</button>
							<br />
							<button class="btn btn-lg btn-primary btn-block" type="submit">SIGN UP</button>
						</form>
					</div>
					<!--Footer-->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger glyphicon" data-dismiss="modal"><span class="glyphicon-remove-circle"></span></button>
					</div>
				</div>
			
			</div>
		</div>
		
		<!--Login up Modal-->
		<div class="modal" id="loginModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--Header-->
					<div class="modal-header">
				
					</div>
					<!--Body-->
					<div class="modal-body">
						<form class="form-signin" action = "#" method="POST">
							<h3 class="form-signin-heading">To access content, Please Login</h3>
							<label for="inputUserName" class="sr-only">User Name</label>
							<input type="text" id="inputUserName" class="form-control" placeholder="User Name" required autofocus>
							<br />
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
							<br />
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</form>
					</div>
					<!--Footer-->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger glyphicon" data-dismiss="modal"><span class="glyphicon-remove-circle"></6span></button>
					</div>
				</div>
			
			</div>
		</div>
	</body>
</html>