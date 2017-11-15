@extends('pub.master')

@section('title')
Contact Form Submitted
@stop

@section('primary')
    <div class="col-sm-9" id="content">
        <h1>Thank you!</h1>
        <p class="text-success bg-success">
            <i class="fa fa-thumbs-up"></i> Your e-mail went out without a hitch
        </p>If it requires a response we should be in touch soon! Feel free to stick around, watch another video, or go ahead and sign up to get started if you haven't already! If you were just writing to say how much you love FileMakerMebsite, we're honored. We're pretty proud of what we've built and hope you enjoy it!
        </p>
    </div>
@stop

@section('sidebar')
    <div class="col-sm-3" id="sidebar">
        @include('pub.inc.sidebar')
    </div>
@stop