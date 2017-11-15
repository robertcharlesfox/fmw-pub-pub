@extends('fmw.master')

@section('title', 'Bad Request')

@section('primary')
<div class="col-xs-12 col-sm-6 col-sm-offset-3">
  <div class="well well-lg text-center">
    <p>Something's amiss...</p>
    <div><i class="fa fa-close fa-3x"></i></div>
    <p>The credentials you are attempting to use for this FileMaker connection are not valid for that action. Check your credentials and/or contact your FileMaker admin.
    </p>
  </div>
</div>
@stop