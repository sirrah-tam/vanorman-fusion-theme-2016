<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <meta name="google-site-verification" content="d02epMDWBw4zvWUiEujRRrF_-2NSm0Ue9HXh3HzAOso" />

	<meta name="robots" content="noodp,noydir"/>
    <meta name="author" content="Cameron Van Orman"/>

     <!-- Social Meta -->
    <meta property="og:title" content="Cameron Van Orman — Web Developer - Seattle, WA"/>
    <meta property="og:url" content="//vanorman.design/"/>
    <meta property="og:site_name" content="Van Orman Design"/>
    <meta property="og:image" content="//vanorman.design/wp-content/themes/vanorman2015/dist/images/cameron-2013.jpg"/>

	{!! SEOMetadata::generate() !!}

	<!-- CSS -->
	<link rel="stylesheet" href="/themes/vanorman/assets/css/app.css" media="screen">
</head>
<body>
	@include('vanorman::partials.header')

	@include('vanorman::partials.alert')

	<div class="main-content">
		@hasSection('header')
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
		                <h1 class="page-header">@yield('header')
		                    <small>@yield('subheader')</small>
		                </h1>

						@include('vanorman::partials.breadcrumbs')
		            </div>
		        </div>
			</div>
		@endif

		@yield('before')

		@yield('content')

		@yield('after')
	</div>

	@include('vanorman::partials.footer')

	<!-- Javascript -->
    <script src="/themes/vanorman/assets/js/all.js"></script>

	@yield('javascript')
</body>
</html>
