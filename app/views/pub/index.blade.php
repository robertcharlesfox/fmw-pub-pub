@extends('pub.master')

@section('title')
The Easiest Way to Get FileMaker Pro on the web.
@stop

@section('primary')
  <div class="col-xs-12" id="content">
      <h1>The Easiest Way to Get FileMaker on the Web</h1>
      <p>Our software is designed so that you can do almost all of your development with FileMaker and publish to the web without having to mess with any PHP/CSS/HTML/XML. Our FileMaker Website software is designed by, and for, FileMaker developers.</p>
      <ul class="fa-ul">
        <li><i class="fa fa-li fa-check"></i> Custom Web Publishing without writing any PHP.</li>
        <li><i class="fa fa-li fa-check"></i> Our software is a nice replacement for PHP Site Assistant.</li>
        <li><i class="fa fa-li fa-check"></i> Create web layouts in minutes.</li>
        <li><i class="fa fa-li fa-check"></i> Do almost all of your FileMaker web work inside of FileMaker.</li>
        <li><i class="fa fa-li fa-check"></i> Responsive pages come standard. Every page type looks great on all devices.</li>
      </ul>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="//player.vimeo.com/hubnut/channel/845401?color=19aa4b&amp;background=000000&amp;slideshow=1&amp;video_title=1&amp;video_byline=1" width="400" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
<!--         <iframe class="embed-responsive-item" src="//player.vimeo.com/video/113358940?title=0&amp;byline=0&amp;portrait=0&amp;color=19aa4b"></iframe> -->
      </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 fm-feature">
        <img class="feature-icon center-block" src="/images/maker.png" alt="FileMaker Connections">
        <h2>Connections</h2>
        <p>FileMaker website uses a standard FileMaker user account to connect to your FileMaker database. If your FileMaker database is version 7 or above, and hosted on FileMaker server (Server Advanced is not required), then you can use FileMaker Website.</p>
    </div>
    <div class="col-sm-4 fm-feature">
        <img class="feature-icon center-block" src="/images/pages.png" alt="FileMaker Web Layouts">
        <h2>Pages</h2>
        <p>Can you build a FileMaker layout? Then you can get it on the web. FileMaker Website Pages are based on FileMaker layouts, and are designed so you can develop almost entirely in FileMaker. You can try it out with our Free plan or just dive right in. {{-- HTML::link('signup', 'Sign up now to get started!', array('id' => 'free-trial')) --}}</p>
    </div>
    <div class="col-sm-4 fm-feature">
        <img class="feature-icon center-block" src="/images/scripts.png" alt="FileMaker Scripts">
        <h2>Scripts</h2>
        <p>Write your scripts in FileMaker and call them from your FileMaker website. Scripts can be activated by buttons or by script triggers -- just like in FileMaker! (Coming in future versions of FileMaker Website)</p>
    </div>
@stop

@section('scripts')
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54186d476b4383bc"></script>
  <script type="text/javascript">
    $('#free-trial').click(function() {
      ga('send', 'event', 'Public Actions', 'Click Content', 'Home: Start Free Trial');
    });
    $('.embed-responsive *').click(function() {
      ga('send', 'event', 'Public Actions', 'Click Content', 'Home: Video Intro');
    });
  </script>
@stop