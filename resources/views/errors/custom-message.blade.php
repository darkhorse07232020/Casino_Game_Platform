@if(Session::has('primary') || Session::has('info') || Session::has('success') || Session::has('warning') || Session::has('danger'))
<div class="" style="margin-top:6%;margin-bottom:-6%;">
    <div class="row">
        <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12 offset-md-2">
            <!-- @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif -->

            @if (session('primary'))
            <div class="alert alert-primary alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                <b> Primary - </b> {{ session('primary') }}</span>
            </div>
            @endif

            @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                <b> Info - </b>  {{ session('info') }}</span>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                <b> Success - </b>  {{ session('success') }}</span>
            </div>
            @endif

            @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                <b> Warning - </b>  {{ session('warning') }}</span>
            </div>
            @endif

            @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>
                <b> Danger - </b>  {{ session('danger') }}</span>
            </div>
            @endif

        </div>
    </div>
</div>
@endif
