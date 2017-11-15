@extends('fmw.master')

@section('title', 'Unauthorized')

@section('primary')
<div class="col-xs-12 col-sm-6 col-sm-offset-3">
  <div class="well well-lg text-center">
    <p>Something's amiss...</p>
    <div><i class="fa fa-close fa-3x"></i></div>
    <p>Chances are, you're trying to access a page that you're not allowed to. Might just be a page that's not active. If you're pretty sure something's broken, {{ HTML::link('#', 'contact us', array('data-toggle' => 'modal', 'data-target' => '#send-feedback-modal')) }} and we'll look into it. The product IS in beta afterall. Thanks for understanding.
    </p>
  </div>
</div>
@stop