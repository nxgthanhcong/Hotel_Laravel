<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">
				<img src="user/images/hotels.png" alt="Your logo" style="height:35px;" /> Hotels</a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<!-- <span class="navbar-toggler-icon"></span> -->
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('home')}}">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="{{route('about')}}">About</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{route('service')}}">Services</a>
					</li>
					<li class="nav-item dropdown @@room__active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Rooms <span class="fa fa-angle-down"></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{route('room')}}">Rooms</a>
							<a class="dropdown-item" href="{{route('rooms')}}">Room Single</a>
						</div>
					</li>
					<li class="nav-item dropdown @@blog__active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Blog <span class="fa fa-angle-down"></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="">Blog</a>
							<a class="dropdown-item" href="">Blog Single</a>
						</div>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
				<a href="{{route('book')}}" class="ml-3 book btn btn-secondary btn-style">Book Now</a>

						<div class="profile_details w3l">
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">
											<span class="prfil-img"><img src="/cdth18a/public/api/images/in4.jpg" alt=""> </span>
											<div class="user-name">
												<p>Cong</p>
												<span>Administrator</span>
											</div>
											<i class="fa fa-angle-down"></i>
											<i class="fa fa-angle-up"></i>
											<div class="clearfix"></div>
										</div>
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
										<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
										<li> <a href="{{ route('getLogout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>

			</div>
		</div>
	</nav>
	<!--//nav-->
</header>