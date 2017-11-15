<nav class="navbar navbar-fmw" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand fmw-logo" id="header-logo" href="/">>FileMaker Website</a>
  </div>
  <div class="collapse navbar-collapse" id="primary-nav">
    <ul class="nav navbar-nav">
      <li id="header-about">{{ HTML::link('/about', 'About', array('title' => 'About FileMaker Website and its creators, Inner File Software in Washington DC')) }}</li>
      <li id="header-tutorials">{{ HTML::link('/tutorials', 'Tutorials', array('title' => 'Tutorials to help understand FileMaker Website and some of its subtler nuances')) }}</li>
      <li id="header-contact">{{ HTML::link('/contact', 'Contact', array('title' => 'Contact Inner File, makers of FileMaker Website')) }}</li>
      <li id="header-signup">{{ HTML::link($_ENV['APP_BASE_URL'] . '/signup', 'Sign Up', array('title' => 'Sign Up for FileMaker Website, the easiest way to get FileMaker on the web!')) }}</li>
      <li id="header-login">{{ HTML::link($_ENV['APP_BASE_URL'] . '/login', 'Log In', array('title' => 'Log in to FileMaker Website')) }}</li>
    </ul>
  </div>
</nav>