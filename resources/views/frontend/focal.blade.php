@extends('layouts.frontend-sub')

@section('content')

<section class="section--center mdl-grid site-max-width">
  <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Focal Points</h2>
    </div>
    
  </div>
</section>


  <div class="section--center mdl-grid site-max-width">
  <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/38.jpg") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">BKKBN</h2>
            </div>
            <div class="mdl-card__supporting-text">
               -
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://www.bkkbn.go.id/">
                 Website
              </a>
          </div>
        </div>

        <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/39.jpg") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">UNFPA</h2>
            </div>
            <div class="mdl-card__supporting-text">
               -
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="http://indonesia.unfpa.org/">
                 Website
              </a>
          </div>
        </div>

         <div class="mdl-cell mdl-card mdl-cell--6-col mdl-shadow--4dp portfolio-card">
          <div class="mdl-card__media">
            <img class="article-image" src="{{ URL::to("partner/44.jpeg") }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">USAID</h2>
            </div>
            <div class="mdl-card__supporting-text">
               -
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://www.usaid.gov/">
                 Website
              </a>
          </div>
        </div>
      
    </div>


@endsection

@section('script')
  <script type="text/javascript">
    var token = "{{ Session::token() }}";
  </script>

@endsection