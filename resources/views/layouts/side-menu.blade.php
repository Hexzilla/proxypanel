			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{ url('/' . $page='dashboard') }}">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-item show">
							<a class="nav-link" href="{{ url('/' . $page='dashboard') }}"><i class="fa fa-home"></i><span class="sidemenu-label">Home</span></a>
						</li>
						<!-- <li class="nav-item show">
							<a class="nav-link" href="{{url('/' . $page='myproxies')}}"><i class="fa fa-list"></i><span class="sidemenu-label">My Proxies</span></a>
						</li> -->
						<li class="nav-item show">
							<a class="nav-link" href="{{url('/' . $page='location')}}"><i class="fa fa-map-marker"></i><span class="sidemenu-label">Proxy Locations</span></a>
						</li>
						<li class="nav-item show">
							<a class="nav-link" href="{{ url('/' . $page='profile') }}"><i class="fa fa-user"></i><span class="sidemenu-label">Profile</span></a>
						</li>
						<li class="nav-item show">
							<a class="nav-link" href="{{ url('/' . $page='api') }}"><i class="fa fa-code"></i><span class="sidemenu-label">API</span></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->