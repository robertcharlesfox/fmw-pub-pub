<footer class="col-sm-12">
  <div class="well well-sm">
    <p class="lead pull-right visible-xs"><a href="#"><span class="glyphicon glyphicon-chevron-up" alt="Back to top" title="Back to Top"></span></a></p>
    <div>© 2014-17 {{ HTML::link('http://innerfile.com', 'Inner File Software Inc.', array('id' => 'ifs-link-footer', 'target' => '_blank')) }}</div>
    <div>
      {{ HTML::link('/', 'Home', array('id' => 'footer-home')) }} <span class="glyphicon glyphicon-star"></span> 
      {{ HTML::link('/about', 'About', array('id' => 'footer-about')) }} <span class="glyphicon glyphicon-star"></span> 
      {{ HTML::link('/contact', 'Contact', array('id' => 'footer-contact')) }} <span class="glyphicon glyphicon-star"></span> 
      {{ HTML::link($_ENV['APP_BASE_URL'] . '/signup', 'Sign Up', array('id' => 'footer-signup')) }} <span class="glyphicon glyphicon-star"></span> 
      {{ HTML::link($_ENV['APP_BASE_URL'] . '/login', 'Login', array('id' => 'footer-login')) }}
    </div>
    
    <div id="not-filemaker" class="hint">
      FileMaker Website (FM Website, LLC) is an {{ HTML::link('http://innerfile.com', 'Inner File', array('title' => 'FileMaker development and consulting in Washington DC', 'target' => '_blank')) }} company. Inner File Software and FileMaker Website are completely independent of FileMaker (but we both love {{ HTML::link('http://filemaker.com', 'FileMaker', array('target' => '_blank')) }}!). FileMaker, Inc., does not sponsor, authorize, or endorse this site. 
    </div>
  </div>
</footer>