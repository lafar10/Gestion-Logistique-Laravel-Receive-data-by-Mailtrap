<br>
<br>
    <div  align="center">
        <div class="section-title">
            <h2>{{ trans('home.RESERVEZ POUR VOTRE FAYAJ') }}</h2>
        </div>
    </div>
    <br>
    <div align="center" id="sec-1">
        <div class="row row-cols-7">
          <div class="col">
                <a href="{{ route('triporteur') }}" class="btn btn-dark"  id="lilal" >
                    <img  src="./images/tricycle.png" id="iamg" />
                </a>
                <br>
                <br> 
                <span id="num">{{ __('home.triporteur') }}</span>
          </div>
          <div class="col">
                <a href="{{ route('pick') }}" class="btn btn-dark" id="lilal" >
                    <img  src="./images/pickup.png"  id="iamg" />
                    
                </a>
                <br>
                <br> 
                <span id="num">{{ __('home.pick-up') }}</span>
          </div>
          <div class="col">
                <a href="{{ route('camionnette') }}" class="btn btn-dark" id="lilal" >
                    <img  src="./images/camionnette.png"  id="iamg"  />
                    
                </a>
                <br> 
                <br> 
                <span id="num">{{ __('home.camionnette') }}</span>
          </div>
          <div class="col">
                <a href="{{ route('honda') }}" class="btn btn-dark" id="lilal" >
                    <img  src="./images/honda.png"  id="iamg" />
                    
                </a>
                <br> 
                <br> 
                <span id="num">{{ __('home.honda') }}</span>
          </div>
            <div class="col">
                    <a class="btn btn-dark"  href="{{ route('camion') }}" id="lilal" >
                        <img  src="./images/camion.png"  id="iamg" />
                        
                    </a>
                    <br> 
                    <br> 
                    <span id="num">{{ __('home.camion') }}</span>
            </div>
            <div class="col">
                    <a class="btn btn-dark" href="{{ route('remoque') }}"  id="lilal" >
                        <img  src="./images/remoque.png"  id="iamg"  />
                        
                    </a>
                    <br>
                    <br> 
                    <span id="num">{{ __('home.remoque') }}</span>
            </div>
            <div class="col">
                    <a class="btn btn-dark" id="lilal"  href="{{ route('benne') }}" >
                        <img  src="./images/benne.png"  id="iamg"  />
                        
                    </a>
                    <br>
                    <br>
                     <span id="num">{{ __('home.camion a benne') }}</span>
            </div>
        </div>
      </div>
<br>
<br>
<br>
<br>
<br>