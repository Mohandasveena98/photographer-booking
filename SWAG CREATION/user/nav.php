<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

				<h1>
					<P style="color:white;">
					<img src="image.png" alt="HTML5 Icon" style="width:70px;height:70x;">
					<a class=" text-white" href="index.php"><i class=""></i>SWAG CREATION</a>
				</h1>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-center">
						<li class="nav-item active mr-1">
							<a class="nav-link" href="home.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="photographers.php">
								Photographers
							</a>
						</li>
						<li class="nav-item dropdown mr-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								My Bookings
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="view_booking.php">My Bookings</a>
								<a class="dropdown-item" href="payments.php">Payments</a>

							</div>
						</li>
											
						<li class="nav-item dropdown mr-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								<?php echo $fname; ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="profile.php">Profile</a>
								<a class="dropdown-item" href="change_pwd.php">Change password</a>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</li>


					</ul>
				</div>

			</nav>
	</header>