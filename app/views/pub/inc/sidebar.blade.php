@if(Request::is('/about'))
  @include('pub.inc.blocks.about')
@endif

@if(!Auth::check())
  @include('pub.inc.blocks.start')
  @include('pub.inc.blocks.pricing')
@endif

@include('pub.inc.blocks.ifs')