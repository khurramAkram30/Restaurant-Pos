<div class="loader" id="loader" style="display:none"></div>

<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<!-- <img src="images/brownmude.png" style="height: 60px;width: 80px;" alt="" /> -->
					<img src="images/brown-munde.png" style="height: 60px;width: 80px;" alt="" />

				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="ShoppingCart.php">Shopping Cart</a></li>

						<div class="d-flex" id="loginNavbar">
								
						<li class="nav-item"><a class="nav-link btn" href="register.php">Register</a></li>
						<li class="nav-item"><a class="nav-link btn" href="login.php">Login</a></li>
						</div>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<script>
		var userid=sessionStorage.getItem("userId");
		var username=sessionStorage.getItem("userName");
		if(userid){
		var getnavbar=document.getElementById('loginNavbar');
		getnavbar.innerHTML=`
		<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Hello ${username}</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="orderHistory.php">Order History</a>
								<a class="dropdown-item" onclick="logout()">Logout</a>
							</div>
						</li>
		
		`;
			
		}
	</script>