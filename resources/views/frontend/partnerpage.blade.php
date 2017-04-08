@extends('layouts.frontend-sub')

@section('content')

<section class="section--center mdl-grid site-max-width">
  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Partners</h2>
    </div>
    <div class="mdl-card__supporting-text">
      <center>  
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab1">Ministries and Goverment Institutions</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab2">Professional Organizations</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab3">Private Sector</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab4">NGO/Civil Society Organizations</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab5">Academia</a>
        <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" id="tab6">International Development Partners</a>
      </center>
    </div>
  </div>
</section>

<div id="tabtab1">
  <div class="section--center mdl-grid site-max-width">
  @if(count($ones) == 0)
    <center>No Partner</center>
  @else
    @foreach($ones as $one)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$one->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $one->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $one->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $one->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

<div id="tabtab2">
  <div class="section--center mdl-grid site-max-width">
  @if(count($twos) == 0)
    <center>No Partner</center>
  @else
    @foreach($twos as $two)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$two->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $two->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $two->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $two->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

<div id="tabtab3">
  <div class="section--center mdl-grid site-max-width">
  @if(count($threes) == 0)
    <center>No Partner</center>
  @else
    @foreach($threes as $three)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$three->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $three->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $three->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $three->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

<div id="tabtab4">
<div class="section--center mdl-grid site-max-width">
  @if(count($fours) == 0)
    <center>No Partner</center>
  @else
    @foreach($fours as $four)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$four->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $four->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $four->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $four->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

<div id="tabtab5">
<div class="section--center mdl-grid site-max-width">
  @if(count($fives) == 0)
    <center>No Partner</center>
  @else
    @foreach($fives as $five)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$five->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $five->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $five->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $five->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

<div id="tabtab6">
<div class="section--center mdl-grid site-max-width">
  @if(count($sixs) == 0)
    <center>No Partner</center>
  @else
    @foreach($sixs as $six)
      
        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/$six->logo") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">{{ $six->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
               {{ $six->narrative }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ $six->website }}">
                 Website
              </a>
          </div>
        </div>
      
    @endforeach
  @endif
  </div>
</div>

  
  <script>
    $(document).ready(function(){
        $("#tabtab2").hide();
    $("#tabtab3").hide();
    $("#tabtab4").hide();
    $("#tabtab5").hide();
    $("#tabtab6").hide();        
        
        $("#tab1").click(function(){
            $("#tabtab1").show();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab2").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").show();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab3").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").show();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab4").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").show();
            $("#tabtab5").hide();
            $("#tabtab6").hide();
        });

        $("#tab5").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").show();
            $("#tabtab6").hide();
        });

        $("#tab6").click(function(){
            $("#tabtab1").hide();
            $("#tabtab2").hide();
            $("#tabtab3").hide();
            $("#tabtab4").hide();
            $("#tabtab5").hide();
            $("#tabtab6").show();
        });

    });
  </script>

@endsection

@section('script')
  <script type="text/javascript">
    var token = "{{ Session::token() }}";
  </script>

@endsection