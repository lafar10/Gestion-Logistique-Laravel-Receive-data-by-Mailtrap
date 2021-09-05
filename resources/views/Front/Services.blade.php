<br>
<br>
<br>
<br>
<div id="sec-3">
<div class="row" >
    <div class="col-12">
        <div class="section-title">
            <h2>{{ __('home.nos services') }}</h2>
        </div>
    </div>
</div>
<section class="shop-services section home" >

    <div class="container">
        <div class="row" @if(app()->getLocale() == 'ar')
                            style="text-align:right;"
                        @else
                            style="text-align:left;"
                        @endif >
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>{{ __('home.recherche op') }}</h4>
                    <p>{{ __('home.recherche op t') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>{{ __('home.comment ca') }}</h4>
                    <p>{{ __('home.comment ca t') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>{{ __('home.collaborer') }}</h4>
                    <p>{{ __('home.collaborer t') }}</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<br>
<br>
</div>
