<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">

   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="..assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contact us</title>
    <link rel = "icon" href = 
    "{{ asset('assets/img/crewimage.jpg') }}" type = "image/x-icon">
        
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    <style>

.package {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1rem;
  margin-top: 4rem;
}
@media screen and (max-width: 800px) {
  .package {
    grid-template-columns: 1fr;
    grid-row-gap: 7rem;
  }
}
.package__item {
  height: 100%;
  transition: all ease-in-out 0.3s;
}
.package__item:hover {
  transform: translateY(-5px);
}
.package__item .package__header {
  background-color: white;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom: 3px solid rgba(0, 0, 0, 0.1);
}
.package__item .package__header .package__name {
  font-size: 1.2rem;
  font-weight: bold;
  text-align: center;
  padding: 8px;
  color: white;
}
.package__item .package__body {
  background-color: white;
  padding: 1rem;
  min-height: 82%;
}
@media screen and (max-width: 800px) {
  .package__item .package__body {
    min-height: 100%;
  }
}
.package__item .package__body .package__price-container {
  min-height: 150px;
  background-color: rgba(0, 0, 0, 0.06);
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 4px;
}
@media screen and (max-width: 800px) {
  .package__item .package__body .package__price-container {
    min-height: 100%;
  }
}
.package__item .package__body .package__price-container--column {
  display: grid;
  grid-template-columns: 1fr 1fr;
  text-align: center;
}
@media screen and (max-width: 800px) {
  .package__item .package__body .package__price-container--column {
    grid-template-columns: 1fr;
  }
}
.package__item .package__body .package__price-container--column .package__column {
  display: grid;
}
.package__item .package__body .package__price-container--column .package__column [class^=package__column] {
  display: flex;
  align-items: center;
  justify-content: center;
}
.package__item .package__body .package__price-container--column .package__column .package__column-title {
  color: white;
  background-color: #78a87f;
  font-weight: 600;
}
.package__item .package__body .package__price-container--column .package__column .package__column-price {
  font-weight: bold;
}
.package__item .package__body .package__price-container--column .package__column .package__column-price--bb {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.package__item .package__body .package__price-container--column .package__column--2 {
  border-left: 1px solid rgba(0, 0, 0, 0.05);
}
.package__item .package__body .package__price-container--column .package__column--2 .package__column-title {
  background-color: #5d9064;
}
.package__item .package__body .package__price {
  text-align: center;
  font-size: 3rem;
  font-weight: 600;
  position: relative;
}
.package__item .package__body .package__price--sm {
  font-size: 1.8rem;
}
.package__item .package__body .package__price--xs {
  font-size: 1.2rem;
}
.package__item .package__body .package__price--monthly::after {
  content: "Monthly";
  background-color: #459bba;
  border-radius: 8px;
  font-size: 10px;
  padding: 1px 5px;
  color: white;
  position: absolute;
}
.package__item .package__body .package__price--quarterly::after {
  content: "Quarterly";
  background-color: orange;
  border-radius: 8px;
  font-size: 10px;
  padding: 1px 5px;
  color: white;
  position: absolute;
}
.package__item .package__body .package__price--yearly::after {
  content: "Yearly";
  background-color: #377c95;
  border-radius: 8px;
  font-size: 10px;
  padding: 1px 5px;
  color: white;
  position: absolute;
}
.package__item .package__body .package__price--ind-yearly::after {
  content: "Yearly Individual";
  background-color: #5043C9;
  border-radius: 8px;
  font-size: 10px;
  padding: 1px 5px;
  color: white;
  position: absolute;
}
/* .package__item .package__body .package__price--ins-yearly::after {
  content: "Yearly Institutional";
  background-color: #5d9064;
  border-radius: 8px;
  font-size: 10px;
  padding: 1px 5px;
  color: white;
  position: absolute;
} */
.package__item .package__body ul {
  margin-top: 1rem;
  text-align: left;
}
.package__item .package__body ul li {
  position: relative;
  font-size: 0.875rem;
  font-weight: 600;
  color: #31363c;
}
.package__item .package__footer a {
  background-color: #2287F5;
  color: white;
  padding: 8px 0;
  width: 100%;
  border: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  cursor: pointer;
  position: relative;
  transition: all ease-in-out 0.3s;
  font-weight: 600;
  display: inline-block;
}
.package__item .package__footer a::after {
  content: "»";
  opacity: 0;
  position: absolute;
  top: 0;
  font-size: 1.5rem;
  transition: all ease-in-out 0.3s;
}
.package__item .package__footer a:hover::after {
  opacity: 1;
  transform: translateX(4px);
}
.package__item:nth-child(1) .package__header {
  background-color: #eea726;
}
.package__item:nth-child(1) .package__footer a {
  background-color: #eea726;
}
.package__item:nth-child(1) .package__footer a:hover {
  background-color: #e49912;
}
.package__item:nth-child(2) .package__header {
  background-color: #459bba;
}
.package__item:nth-child(2) .package__footer a {
  background-color: #459bba;
}
.package__item:nth-child(2) .package__footer a:hover {
  background-color: #3d88a4;
}
.package__item:nth-child(3) .package__header {
  background-color: #78a87f;
}
.package__item:nth-child(3) .package__footer a {
  background-color: #78a87f;
}
.package__item:nth-child(3) .package__footer a:hover {
  background-color: #659c6d;
}



.hr_border{
    border: outset lightcyan;
    width: 20vw;
    margin-bottom: -40px;
}
</style>
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    {{-- <a class="navbar-brand" href="#">Contact	
</a> --}}
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">                

                        @if (Route::has('home'))
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> Dashboard
                            </a>
                        </li>
                        @endif
                        @if (Route::has('contact'))
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">
                                <i class="nc-icon nc-email-83"></i> Contact
                            </a>
                        </li>
                        @endif
                        @if (Route::has('package'))
                        <li class="nav-item active">
                            <a href="{{ route('package') }}" class="nav-link">
                                <i class="nc-icon nc-email-83"></i> Our packages
                            </a>
                        </li>
                        @endif
                        
                        
                        @if (Auth::check())
                        <li class="nav-item ">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Logout
                            </a>

                        </li>
                            @else   
                            
                            @if (Route::has('login'))
                        <li class="nav-item ">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Login
                            </a>
                        </li>
                        @endif

                        @endif  
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>                      

                        
                        {{-- <li class="nav-item ">
                            <a href="lock.html" class="nav-link">
                                <i class="nc-icon nc-key-25"></i> Lock
                            </a>
                        </li> --}}
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="{{ asset('assets/img/bg5.jpg') }}">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                        {{-- <h3 class="card-title">Our Packages</h3>                                         --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h3 class="card-title" style="font-family: serif;">Crew Members Packages</h3>    
                            <hr class="hr_border"/>
                            {{-- crew packages start --}}
                            <div class="container mt-3">
                                <div class="package">
                                    <div class="package__item">
                                        <div class="package__header">
                                            <div class="package__name">Free User</div>
                                        </div>
                                        <div class="package__body">
                                            <div class="package__price-container">
                                                <div class="package__price">$ 0.00</div>
                                            </div>
                                            <ul>
                                                <li>It's Free</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">                                            
                                            <a href="{{ route('package.data', $type=1) }}">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="package__item">
                                        <div class="package__header">
                                            <div class="package__name">Basic</div>
                                        </div>
                                        <div class="package__body">
                                            <div class="package__price-container">
                                                <div class="package__price package__price--sm package__price--monthly">$ 5.00</div>
                                            </div>
                                            <ul>
                                                <li>$ 5.00/month</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">
                                            <a href="{{ route('package.data', $type=2) }}">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="package__item">
                                        <div class="package__header">
                                            <div class="package__name">Premium</div>
                                        </div>
                                        <div class="package__body">
                                            <div class="package__price-container">
                                                <div class="package__price package__price--sm package__price--monthly">$ 3.00</div>
                                                <div class="package__price package__price--sm package__price--yearly">$ 36.00</div>
                                            </div>
                                            
                                            <ul>
                                                <li>$ 3.00 a month billed yearly</li>
                                                <li>Premium User Account Dashboard</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">
                                            <a href="{{ route('package.data', $type=3) }}">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- crew packages end --}}
<br>
                            <h3 class="card-title" style="font-family: serif;margin-top:70px;">Production Accounts Packages</h3>    
                            <hr class="hr_border"/>

                          {{-- Production Accounts Packages start --}}
                          <div class="container mt-3">
                            <div class="package">
                                <div class="package__item">
                                    <div class="package__header">
                                        <div class="package__name">Basic</div>
                                    </div>
                                    <div class="package__body">
                                        <div class="package__price-container">
                                            <div class="package__price package__price--sm ">$75 for first 25 hires</div>
                                        </div>
                                        <ul>
                                            <li>$3/hire after 25</li>
                                            <li>full fill out and approval process of documents with download available</li>
                                        </ul>
                                    </div>
                                    <div class="package__footer">
                                        <a href="{{ route('package.data', $type=4) }}">Get Started</a>
                                    </div>
                                </div>
                                <div class="package__item">
                                    <div class="package__header">
                                        <div class="package__name">Standard</div>
                                    </div>
                                    <div class="package__body">
                                        <div class="package__price-container">
                                            <div class="package__price package__price--sm">$130 for first 50 hires</div>
                                        </div>
                                        <ul>
                                            <li>$2/hire after 50</li>
                                        </ul>
                                    </div>
                                    <div class="package__footer">
                                        <a href="{{ route('package.data', $type=5) }}">Get Started</a>
                                    </div>
                                </div>
                                <div class="package__item">
                                    <div class="package__header">
                                        <div class="package__name">Premium</div>
                                    </div>
                                    <div class="package__body">
                                        <div class="package__price-container">
                                            <div class="package__price package__price--sm">$200 for first 100 hires</div>
                                        </div>
                                        
                                        <ul>
                                            <li>$1/hire after 100</li>
                                        </ul>
                                    </div>
                                    <div class="package__footer">
                                        <a href="{{ route('package.data', $type=6) }}">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Production Accounts Packages end --}}



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" style="margin-top:70px;">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        {{-- <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web --}}
                        <a href="http://www.creative-tim.com">CrewID</a>
                    </p>
                </nav>
            </div>
        </footer>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Style</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Background Image</p>
                        <label class="switch-image">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Sidebar Mini</p>
                        <label class="switch-mini">
                            <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Fixed Navbar</p>
                        <label class="switch-nav">
                            <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                            <span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Filters</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange active" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('assets/img/sidebar-1.jpg') }}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('assets/img/sidebar-3.jpg') }}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('assets/img/sidebar-4.jpg') }}" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('assets/img/sidebar-5.jpg') }}" alt="" />
                    </a>
                </li>
                <li class="button-container">
                    <div>
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                    </div>
                </li>
                <li class="button-container">
                    <div>
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Buy now!</a>
                    </div>
                </li>
                <li class="button-container">
                    <div>
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documentation</a>
                    </div>
                </li>
                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"> · 426</i></button>
                </li>
            </ul>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!--  jVector Map  -->
<script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--  DatetimePicker   -->
<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<!--  Sweet Alert  -->
<script src="{{ asset('assets/js/plugins/sweetalert2.min.js') }}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{ asset('assets/js/plugins/nouislider.js') }}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{ asset('assets/js/plugins/bootstrap-table.js') }}"></script>
<!--  DataTable Plugin -->
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--  Full Calendar   -->
<script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>