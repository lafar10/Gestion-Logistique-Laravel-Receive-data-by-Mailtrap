<br>

<div class="container" >
    <div class="row" >
        <div class="col-12">
            <div class="section-title">
                <h2>{{ __('home.notre valeur') }}</h2>
            </div>
        </div>
    </div>
    <br>
    <div id="sec-2">
        <div class="row"  >
            <div class="col-lg-6" >
                <img  src="./images/cc.png" id="iimg" style="width:500px;height:400px;" />
            </div>
            <div class="col-lg-6" @if(app()->getLocale() == 'ar')
                                            style="text-align:right;"
                                @else
                                            style="text-align:left;"
                                @endif >

                    <h2>{{ __('home.pourquoi') }}</h2>
                <br>
                <p>
                    {{ __('home.pourquoi text') }}
                </p>
            </div>
        </div>
    </div>
</div>
