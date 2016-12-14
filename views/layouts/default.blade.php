@php( $currentUri = (Request::url()) )

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
    <meta property="og:url" content="{{ $currentUri }}" data-no-instant/>
    <meta property="og:site_name" content="{{ setting('slug') }} Van Orman Design" data-no-instant/>
    <meta property="og:image" content="{{ variable('og-image') }}" data-no-instant/>

    {!! SEOMetadata::generate() !!}

    <!-- CSS -->
    <link rel="stylesheet" href="/themes/vanorman/assets/css/app.css" media="screen">
</head>
<body class="@yield('class')">
    @include('vanorman::partials.header')

    @include('vanorman::partials.alert')

    <div class="main-content">
        @hasSection('header')
        
        <div class="masthead">
            <div class="wrapper">
                <div class="masthead-text">
                    @yield('header')
                </div>
                @yield('subheader')
            </div>
        </div>
            
        @include('vanorman::partials.breadcrumbs')

        @endif

        @yield('before')

        @yield('content')

        @yield('after')
    </div>

    @include('vanorman::partials.footer')

    <!-- Javascript -->
    <script src="/themes/vanorman/assets/js/all.js"></script>
    <script data-no-instant>InstantClick.init();</script>

    @yield('javascript')
</body>
</html>
