<!-- <nav class="menu-overlay">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-6">
				<ul class="mobile-nav">
					@if (menu_exists('header'))
						@include('vanorman::partials.nav', ['items' => menu('header')->roots()])
					@endif
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="mobile-nav">
					@if ($currentUser)
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ $currentUser->gravatar(20) }}" class="img-circle">
								{{ $currentUser->fullname }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li><a href="/settings"><i class="btl bt-user bt-fw"></i> Account Settings</a></li>

								@can('core.access.admin')
									<li class="divider"></li>
									<li><a href="/admin"><i class="btl bt-dashboard bt-fw"></i> Admin CP</a></li>
									<li class="divider"></li>
								@endcan

								<li><a href="/logout"><i class="btl bt-sign-out bt-fw"></i> Logout</a></li>
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
						<li>
							<a href="/register">Register</a>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
</nav>

<header class="main-header nav navbar-nav navbar-default" role="navigation">
	<div class="wrapper">
		
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<div class="logo">
				<a class="nav-logo-link" href="/">
					<img src="{{ variable('logo') }}" alt="{{ setting('website_title') }}">
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="nav navbar-nav navbar-right">
				<a class="js-nav-toggle nav-toggle" href="#" title="Mobile Menu">
					<div class="icon">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>
				</a>
			</div>
		</div>
		
	</div>
</header>
 -->