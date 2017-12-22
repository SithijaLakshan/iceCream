    @extends('layouts.app')

  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <div class="site-wrapper" style="background-image: url(images/back.jpg); color:#fff;">

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

          <div class="inner cover text-center">
            <h1 class="cover-heading"><img width="25%" src="favicon.ico"/><br/> ice-Cream</h1>
            <p class="lead">ice-cream alows you to explore the world with your friends and alow you to share your own stuff with friends safely.</p>
            <p class="lead">
              <a href="{{ route('register') }}" class="btn btn-lg btn-default">Sign up</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p class="text-right">IceCream By <a href="/contact">Sithija Lakshan...</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

