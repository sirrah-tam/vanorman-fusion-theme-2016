@php($date = date('Y'))

<footer class="footer">
    <div class="wrapper text-center">
        <div class="footer-content">
            <img class="img-responsive center-block" src="{{ variable('logo') }}" alt="{{ setting('website_title') }}" width="60">
            <hr class="small">
            Made with <i class="btl bt-mug bt-fw"></i> &amp; <i class="btl bt-heart bt-fw"></i> in Seattle, WA.
            <br>
            <p class="copy">
                Van Orman Design &copy; {{ setting('website_title') }} 2013—{{ $date }}
            </p>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-centered text-center">
                    <small class="copy">
                        Created with Fusion CMS ({{ config('fusion.version') }}) &copy; <a href="http://efelle.com" target="_blank" rel="nofollow"><span class="brand-efelle">Efelle Creative</span></a>
                    </small>
                    <br>
                    <small>App Load Time: {{ app_loading_time() }} / App Memory Usage: {{ app_memory_usage() }} &nbsp; </small>
                </div>    
            </div>
        </div>
    </div>
</footer>
