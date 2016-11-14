@php($date = date('Y'))

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Created with Fusion CMS ({{ config('fusion.version') }}) &copy; <a href="http://efelle.com" target="_blank" rel="nofollow"><span class="brand-efelle">Efelle Creative</span></a></p>
                    <small>App Load Time: {{ app_loading_time() }} / App Memory Usage: {{ app_memory_usage() }} &nbsp; </small>
                    <p> Made with <i class="btl bt-mug bt-fw"></i> &amp; <i class="btl bt-heart bt-fw"></i> in Seattle, WA.</p>
                    <hr class="small">
                    <small class="copy">Copyright &copy; {{ setting('website_title') }} 2013—{{ $date }}</small>
                </div>
            </div>
        </div>
    </div>
</footer>
