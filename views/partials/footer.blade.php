@php($date = date('Y'))

<footer class="footer">
    <div class="footer-content">
        <div class="wrapper">
            <ul class="links">
                @if (menu_exists('header'))
                    @include('vanorman::partials.links', ['items' => menu('header')->roots()])
                @endif
            </ul>
        </div>
    </div>
    <div class="footer-top">
        <div class="wrapper text-center">
            <small>Made with a metric F*ck ton of <i class="btl bt-mug bt-fw"></i> &amp; <i class="btl bt-heart bt-fw"></i> in Seattle, WA.</small>
            
        </div>
    </div>
    <div class="footer-bottom">
        <div class="logo">
            <img class="img-responsive center-block" src="{{ variable('logo') }}" alt="{{ setting('website_title') }}" width="60">
        </div>
         <div class="wrapper">
            <div class="col-centered text-center">
                <br>
                <small class="copy">
                    &copy; {{ setting('website_title') }} 2013—{{ $date }} Van Orman Design
                </small>
                <hr class="small">
                <small class="copy">
                    Created with Fusion CMS ({{ config('fusion.version') }}) &copy; <a href="http://efelle.com" target="_blank" rel="nofollow"><span class="brand-efelle">Efelle Creative</span></a>
                </small>
                <br>
                <small>App Load Time: {{ app_loading_time() }} / App Memory Usage: {{ app_memory_usage() }} &nbsp; </small>
            </div>    
        </div>
    </div>
</footer>
