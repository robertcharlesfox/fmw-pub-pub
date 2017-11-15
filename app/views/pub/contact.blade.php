@extends('pub.master')

@section('title', 'Contact Us')

@section('primary')
<div class="col-sm-12" id="content">
  <h1>Contact Us</h1>
  {{ Form::open(array('url' => 'contact', 'role' => 'form')) }}
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          {{ Form::label('email', 'E-Mail Address', array('class' => 'sr-only')) }}
          {{ Form::email('email', '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'E-mail Address', 'required' => 'required')) }}
        </div>
        <div class="form-group">
          {{ Form::label('subject', 'Subject', array('class' => 'sr-only')) }}
          {{ Form::select('subject', array(
              '' => '',
              'quote' => 'Need a quote for customization.',
              'callback' => 'Need someone to call me.',
              'other' => 'Other inquiry (specify in your message)',
            ), NULL, array('class' => 'form-control', 'required' => 'required')) }}
        </div>
        <div class="form-group">
          {{ Form::label('name', 'Your Name', array('class' => 'sr-only')) }}
          {{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'Your Name', 'required' => 'required')) }}
        </div>
        <div class="form-group">
          {{ Form::label('phone', 'Phone #', array('class' => 'sr-only')) }}
          {{ Form::text('phone', '', array('class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone #')) }}
        </div>
        {{ Form::captcha() }}
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          {{ Form::label('body', 'Message', array('class' => 'sr-only')) }}
          {{ Form::textarea('body', '', array('class' => 'form-control', 'id' => 'body', 'placeholder' => 'Message', 'rows' => 9, 'required' => 'required')) }}
        </div>
      </div>
      <div class="col-sm-4 pull-right">
        <label>{{ Form::checkbox('email_list_signup', 1, true) }} Sign Up For FileMaker Website News</label>
        {{ Form::submit('Send E-mail', array('class' => 'btn btn-fmw btn-block', 'id' => 'send-email'))}}
      </div>
    </div>
    {{ Form::token() }}
  {{ Form::close() }}
</div>
@stop

@section('scripts')
  <script type="text/javascript">
    $('#send-email').click(function() {
      ga('send', 'event', 'Public Actions', 'Click Content', 'Contact: Send Email');
    });
  </script>
@stop