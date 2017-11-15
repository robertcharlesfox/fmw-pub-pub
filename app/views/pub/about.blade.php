@extends('pub.master')

@section('title')
About FileMaker Website and Inner File Software
@stop

@section('primary')
  <div class="col-sm-9" id="content">
    <h1>About Us</h1>
    <img id="ifs-logo" src="/images/ifs_logo.png" alt="Inner File Software, FileMaker Development in Washington, DC" />
    <p>The group behind FileMaker Website, <a href="http://innerfile.com" target="_blank" id="ifs-link">Inner File Software</a>, has realized that there is great need to connect FileMaker databases to the web and we believe that you shouldn't have to be a PHP programmer to build great FileMaker websites.</p>
    <p>Inner File Software is a FileMaker company that you can trust. We have been building great FileMaker databases and web applications in Washington, DC since 2006. We work for clients who demand the best: organizations such as the Wall Street Journal and NASA. Experience matters.</p>
    <p>Inner File Software knows its way around getting FileMaker databases on the web, as well. We literally wrote the software which integrates FileMaker and the popular content management system Drupal. We built and maintain many web portals to mission critical FileMaker databases.</p>
    <p>We look forward to working with you.</p>
  </div>
@stop

@section('sidebar')
  <div class="col-sm-3" id="sidebar">
    @include('pub.inc.sidebar')
  </div>
@stop

@section('scripts')
  <script type="text/javascript">
    $('#ifs-link').click(function() {
      ga('send', 'event', 'Public Actions', 'Click Content', 'About: Inner File Software');
    });
  </script>
@stop