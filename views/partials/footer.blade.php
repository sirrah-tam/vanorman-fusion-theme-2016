@php($date = date('Y'))

<footer class="footer">
    <div class="footer-content text-center">
        <div class="logo">
            <img class="img-responsive center-block" src="{{ variable('logo') }}" alt="{{ setting('website_title') }}" width="60">
        </div>
        <hr class="small">
        <ul class="social list-inline">
            <li><a href="{{ variable('social-linkedin') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-linkedin-alt bt-fw"></i></a></li>
            <li><a href="{{ variable('social-github') }}" target="_blank" class="btn-social btn-outline"><i class="fab fab-github bt-fw"></i></a></li>
            <li><a href="{{ variable('email') }}" class="btn-social btn-outline"><i class="btl bt-paper-plane bt-fw"></i></a></li>
            <li><a href="{{ variable('social-spotify') }}" class="btn-social btn-outline" target="_blank"><i class="fab fab-spotify bt-fw"></i></a></li>
        </ul> 
        <hr class="small">
        <small class="copy">
            &copy; 2013—{{ $date }} {{ setting('website_title') }}
        </small>
    </div>
    <div class="footer-bottom">
         <div class="wrapper">
            <div class="col-centered text-center">
                <small class="copy">
                    Powered by <img class="img-responsive" src="/themes/vanorman/assets/images/fusioncms-logo.svg" width="150">{{ config('fusion.version') }} &copy; <a href="http://efelle.com" target="_blank" rel="nofollow"><span class="brand-efelle">Efelle Creative</span></a>
                </small>
                <br>
                <small>App Load Time: {{ app_loading_time() }} / App Memory Usage: {{ app_memory_usage() }} &nbsp; </small>
            </div>    
        </div>
    </div>
    <div class="footer-top">
        <div class="wrapper text-center">
            <small>Made with a metric F*ck ton of <a href="http://status.efelle.co/" target="_blank" rel="nofollow"><i class="btl bt-mug bt-fw"></i></a> &amp; <i class="btl bt-heart bt-fw"></i> in Seattle, WA.</small>
        </div>
    </div>
</footer>
