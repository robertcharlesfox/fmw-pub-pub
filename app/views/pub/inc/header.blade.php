<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    
    <title>FileMaker Website | @yield('title')</title>
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/font-awesome.min.css') }}
    {{ HTML::style('/css/styles.css') }}
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::style('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
      {{ HTML::style('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
    <![endif]-->

@include('pub.inc.analyticstracking')
</head>