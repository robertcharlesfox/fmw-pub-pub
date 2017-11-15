<!DOCTYPE html>
<html lang="en">
  @include('pub.inc.header')
  @if(App::environment() != 'production')
  <body class="non-prod">
    <div class="environment">Non-prod Environment ({{ App::environment() }})</div>
  @else
  <body>
  @endif
    <div id="page-wrapper">
      <div id="page" class="container">
        <div id="nav" class="row">
          <div id="nav-inner">
            @include('pub.inc.nav')
          </div>
        </div>
        <div id="carousel" class="row">
          <div id="carousel-inner">
            @include('pub.inc.carousel')
          </div>
        </div>
        <div id="main" class="row">
          @if(Session::has('message'))
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              {{ Session::get('message') }}
            </div>
          @endif
            @foreach($errors->all() as $error)
              <div id="withError" class="col-xs-12">
                <div class="error alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  {{ $error }}
                </div>
              </div>
            @endforeach
          @if(isset($messages))
            @foreach($messages as $message)
            <div class="col-xs-12">
              <div class="error alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              {{ $message }}
              </div>
            </div>
            @endforeach
          @endif
          @yield('primary')
          @if (trim($__env->yieldContent('sidebar')))
            @yield('sidebar')
          @endif
        </div>
        <div id="footer" class="row">
          @include('pub.inc.footer')
        </div>
      </div>
      {{ HTML::script('/js/jquery.min.js') }}
      {{ HTML::script('/js/bootstrap.min.js') }}
    </div>
    @yield('scripts')
    @include('pub.inc.events')
  </body>
</html>