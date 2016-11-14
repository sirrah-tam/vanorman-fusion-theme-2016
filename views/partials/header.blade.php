<!-- Top Header -->
<header role="navigation" class="main-page-header FixedTop">
	<!-- Main Navigation (Mobile + Desktop) -->
	<div class="main-nav">
		<div class="wrapper">
		
			<!-- Mobile Navigation Toggle -->
			<nav id="navbar" class="navbar-collapse collapse main-nav-links">

				<!-- Young Survival Coalition Brand Logo -->
				<div class="nav-logo">
					<a class="nav-logo-link" href="/">
						<img src="{{ variable('logo') }}" alt="{{ setting('website_title') }}">
					</a>
				</div>

				<!-- Main Menu - Bottom -->
				<ul class="nav navbar-nav navbar-left main-menu">
					@if (menu_exists('header'))
						@include('vanorman::partials.nav', ['items' => menu('main-menu')->roots()])
					@endif
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if ($currentUser)
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ $currentUser->gravatar(20) }}" class="img-circle">
								{{ $currentUser->fullname }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li><a href="/settings"><i class="fa fa-user fa-fw"></i> Account Settings</a></li>

								@can('core.access.admin')
									<li class="divider"></li>
									<li><a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Admin CP</a></li>
									<li class="divider"></li>
								@endcan

								<li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
							</ul>
						</li>
					@else
						<li class="navbar-right dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in <b class="caret"></b></a>
							<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											{{ Form::open(['url' => 'login']) }}
												<div class="form-group">
													{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
												</div>

												<div class="form-group">
													{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
												</div>

												<div class="checkbox">
													<label>
														{{ Form::checkbox('remember_me', '1') }} Remember me
													</label>
												</div>

												<div class="form-group">
													<button type="submit" class="btn btn-success btn-block">Sign in</button>
												</div>
											{{ Form::close() }}
										</div>
									</div>
								</li>
							</ul>
						</li>

						<li class="navbar-right">
							<a href="/register">Register</a>
						</li>
					@endif
				</ul>
			</nav>
		</div>
	</div>

	<!-- Search Overlay -->
</header>
