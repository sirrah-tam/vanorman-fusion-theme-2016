@if (Session::has('caffeinated.flash.message'))
    <div class="alert alert-{{ Session::get('caffeinated.flash.level') }}" role="alert">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{ Session::get('caffeinated.flash.message') }}
                </div>
            </div>
        </div>
    </div>
@endif
