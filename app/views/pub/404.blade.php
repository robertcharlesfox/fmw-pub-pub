@extends('pub.master')

@section('title', 'Page not found')

@section('primary')
<div class="col-xs-12 col-sm-6 col-sm-offset-3">
  <div class="well well-lg text-center">
    <p>Hmmmm...looks like you've either tried to reach a page that is inactive, doesn't exist at all or something's broken.</p>
    <div><i class="fa fa-chain-broken fa-3x"></i></div>
    <p>If it's the former, double-check your path and try again. If you're pretty sure something's broken, {{ HTML::link('#', 'contact us', array('data-toggle' => 'modal', 'data-target' => '#send-feedback-modal')) }} and we'll look into it. The product IS in beta afterall. Thanks for understanding.
    </p>
  </div>
</div>
@stop