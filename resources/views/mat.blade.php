<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="mat/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="mat/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ProxyPanel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="mat/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="mat/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" style="font-weight: bold">
          Proxy Panel </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        @if (!$userId)
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/signin')}}" >
                    <i class="material-icons">login</i> LogIn
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/signup')}}" >
                    <i class="material-icons">account_circle</i> Registration
                    </a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}" >
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li>
            </ul>
        @endif
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('mat/img/tech3.png')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title" style="margin-top: 0">4G Mobile Proxy</h2>
          <h5>4G Mobile proxy. Rotating new clear mobile IP every 5 min. HTTP/HTTPS or SOCKS connection. Mobile proxies have direct connection to mobile network, your accounts never will be blocked. USA, Europe or UK mobile proxy 4G LTE / 3G connections and mixed mobile carriers and cities. 4G proxy can be used with Chrome, Firefox, Safari or any other browser or application (jarvee, instagram, telegram etc).</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Proxy Service</h2>
            <h5 class="description">
                Mobile proxies will be locked by ip, username and password, you will get personal IP:PORT. Max dedicated 4G proxy internet connection speed up to 60mbps. Some mobile proxy has unlimited internet data. Anonymous, unique and clear mobile proxy. Get up to 40000 Mobile IP month / per connection. SOCKS5 and mobile ip IPv4. All our proxy has auto renewal option. Mobile proxy more reliable than standard proxy. Simple switch between http, https, socks5
            </h5>
          </div>
        </div>
        <br><br>
        <div class="features">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Proxy</th>
                        <th>Days rent</th>
                        <th>Price</th>
                        <th>Buy Proxy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citys as $m)
                        <?php $i = rand(0, 3)?>
                        <tr>
                            <td style="vertical-align: middle">{{$m}}</td>
                            <td style="vertical-align: middle">{{ $types[$i][0] }}</td>
                            <td style="vertical-align: middle">{{ $types[$i][1] }}</td>
                            <td style="vertical-align: middle">
                                @if (!$userId)
                                    <a href="{{url('/signin')}}" class="btn btn-primary btn-round">
                                        Order Now
                                    </a>
                                @else
                                    <a href="{{url('/dashboard')}}" class="btn btn-primary btn-round">
                                        Order Now
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <div class="copyright float-right">
        All copyrights reserved © ProxyPanel, USA 2020
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="mat/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="mat/js/core/popper.min.js" type="text/javascript"></script>
  <script src="mat/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="mat/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="mat/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="mat/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="mat/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>