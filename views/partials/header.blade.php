@php($date = date('Y'))

<nav class="menu-overlay">
    <div class="wrapper">
        <div class="row">
            <a class="js-nav-toggle nav-toggle" href="#" data-toggle="tooltip" data-placement="right" title="Collapse side navigation">
                <div class="icon">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="logo">
                    <a href="/"><img class="img-responsive center-block" src="{{ variable('logo') }}" alt="{{ setting('website_title') }}" width="60"></a>
                </div>
                <form class="navbar-form">
                    <div class="form-inline form-group center-block">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-secondary"><i class="btl bt-search bt-lg" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>

        </div>
        <div class="row">
            <ul class="mobile-nav">
                @if (menu_exists('header'))
                    @include('vanorman::partials.nav', ['items' => menu('header')->roots()])
                @endif
            
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
                        <ul class="dropdown-menu">
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
        <div class="row">
            <div class="weather">
                <!-- Spotlight - Weather -->
                <div id="weather"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p class="text-center"> &copy; 2013—{{ $date }} {{ setting('website_title') }}</p>
                <blockquote class="text-center"><small>"Suck it Nerd" <span>- Some Guy</span></small></blockquote>
            </div>
        </div>
    </div>
</nav>


<header class="nav navbar-nav navbar-default main-header" role="navigation">
    <div class="wrapper">
        <div class="navbar-menu">
            <a class="js-nav-toggle nav-toggle" href="#" data-toggle="tooltip" data-placement="right" title="Mobile Menu">
                <div class="icon">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                    <div class="text">menu</div>
                </div>
            </a>
        </div>
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <h1 class="text-center">
                    {{ setting('website_title') }}
                </h1>
            </a>
        </div>
    </div>  
</header>