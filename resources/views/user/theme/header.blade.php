<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">
				<img src="/larangu/public/user/images/hotels.png" alt="Your logo" style="height:35px;" /> Congz Hotel</a>
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
						<a class="nav-link" href="{{route('home')}}">Trang chủ</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="{{route('about')}}">Về chúng tôi</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{route('service')}}">Dịch vụ</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{route('rooms')}}">Các phòng</a>
					</li>
					
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
					</li>
				</ul>
				<a href="{{route('thue.create')}}" class="ml-3 book btn btn-secondary btn-style">ĐẶT PHÒNG</a>

					<!-- <a class="nav-link" href="{{route('contact')}}">Tài khoản</a> -->
						<!-- <div class="profile_details w3l">
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
						</div> -->
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>