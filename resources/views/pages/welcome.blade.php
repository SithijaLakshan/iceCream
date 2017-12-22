    @extends('layouts.app')

  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <div class="site-wrapper" style="background-color:#000;">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">ice-Cream</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="/home">Home</a></li>
                  <li><a href="{{ route('login') }}">login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading"><img src="favicon.ico"/></h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>IceCream By <a href="/contact">Sithija Lakshan...</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

