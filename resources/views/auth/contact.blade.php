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
        




html body .container .box {
  display: grid;
  box-shadow: 0px 0px 10px #000;
  
}
html body .container .box .info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #f8f9fa00;
  color: #ffffff;
}
html body .container .box .info h4 {
  margin: 10px 0;
}
html body .container .box .info p {
  margin: 5px 0px;
}
html body .container .box .info p:nth-child(4) {
  margin-bottom: 20px;
}
html body .container .box h3 {
  background: #efefef;
  padding: 10px;
}
html body .container .box form {
  width: 100%;
  display: grid;
  background: #6125257a;
  padding: 20px 10px;
}
html body .container .box form .name,
html body .container .box form .company,
html body .container .box form .email,
html body .container .box form .tele {
  margin-bottom: 20px;
}
.card label {
    /* font-size: 0.75rem; */
    margin-bottom: 5px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    /* font-weight: 600; */
}
html body .container .box form .name input,
html body .container .box form .company input,
html body .container .box form .email input,
html body .container .box form .tele input {
  padding: 5px;
  outline: none;
  border: 1px solid #61b1f3;
  width: 95%;
  border: none;
    height: 60%;
    border-bottom: 4px solid #e23907;
    border-radius: 5px;
    padding: 10px;
}
html body .container .box form .message {
  grid-column: 1/3;
}
html body .container .box form .message label {
  font-size: 14px;
  opacity: 0.9;
}
html body .container .box form .message #message {
  height: 90px;
  width: 100%;
  padding: 5px;
  outline: none;
  border: none;
    border-bottom: 4px solid #e23907;
    border-radius: 5px;
    padding: 10px;
}
html body .container .box form .submit {
  grid-column: 1/3;
}
html body .container .box form .submit input[type=submit] {
  cursor: pointer;
  background: #61b1f3;
  letter-spacing: 0.2em;
  padding: 10px;
  outline: none;
  border: none;
  border-radius: 5px;
  display: block;
  max-width: 80%;
  width: 50%;
  margin: auto;
  text-align: center;
  transition: 0.3s linear;
  font-weight: bold;
  margin: 20px auto;
}
html body .container .box form .submit input[type=submit]:hover, html body .container .box form .submit input[type=submit]:focus {
  color: #efefef;
  background: #163568;
}
@media (min-width: 700px) {
  html body .container h2 {
    justify-content: flex-start;
    align-items: flex-end;
    font-size: 2em;
  }
  html body .container .box {
    grid-template-columns: 1fr 2fr;
  }
  html body .container .box .info {
    grid-row: 1/3;
    font-size: 1.2em;
  }
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
                    @guest

                        @if (Route::has('home'))
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nc-icon nc-chart-pie-35"></i> Dashboard
                            </a>
                        </li>
                        @endif
                        @if (Route::has('contact'))
                        <li class="nav-item active">
                            <a href="{{ route('contact') }}" class="nav-link">
                                <i class="nc-icon nc-email-83"></i> Contact
                            </a>
                        </li>
                        @endif
                        @if (Route::has('package'))
                        <li class="nav-item">
                            <a href="{{ route('package') }}" class="nav-link">
                                <i class="nc-icon nc-email-83"></i> Our packages
                            </a>
                        </li>
                        @endif
                       
                        @if (Route::has('login'))
                        <li class="nav-item ">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Login
                            </a>
                        </li>
                        @endif
                        {{-- <li class="nav-item ">
                            <a href="lock.html" class="nav-link">
                                <i class="nc-icon nc-key-25"></i> Lock
                            </a>
                        </li> --}}
                        @endguest
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
                                        <h3 class="card-title">Get in Touch</h3>                                        
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <main class="container"> 
                                <!-- Success message -->
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif                              
                                <!-- Box -->
                                <div class="box">
                                    <!-- info container -->
                                    <section class="info">
                                        <h4>CrewID</h4>
                                        <p>
                                            <i class="fas fa-road"></i>
                                             <small>44 something st</small>
                                        </p>
                                        <p>
                                            <i class="fas fa-phone-alt"></i>
                                            <small>(666) 666-6666</small>
                                        </p>
                                        <p>
                                            <i class="fas fa-envelope"></i>
                                            <small>something@gmail.com</small>
                                            @php
                                               echo strtotime(date('Y-m-d'));
                                            @endphp
                                        </p>
                                    </section>
                                    <!-- form container -->
                                    {{-- <h3>Email Us</h3> --}}
                                    <form method="post" action="{{ route('contact.store') }}">
                                        <!-- CROSS Site Request Forgery Protection -->
                                        @csrf
                                        <!-- Name -->
                                        <div class="name">
                                            <label for="name">Name*</label>
                                            <br>
                                            <input type="text" id="name" name="name" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="email">
                                            <label for="email">Email*</label>
                                            <br>
                                            <input type="email" id="email" name="email" required>
                                        </div>
                                        <!-- Telephone -->
                                        <div class="tele">
                                            <label for="telephone">Phone Number*</label>
                                            <br>
                                            <input type="number" id="phone" name="phone" min="11111" max="9999999999999" required>
                                        </div>
                                        <!-- Company -->
                                        <div class="company">
                                            <label for="company">Subject*</label>
                                            <br>
                                            <input type="text" id="subject" name="subject" required>
                                        </div>
                                        <!-- Message -->
                                        <div class="message">
                                            <label for="message">Message*</label>
                                            <br>
                                            <textarea id="message" name="message"></textarea>
                                        </div>
                                        <!-- Submit -->
                                        <div class="submit">
                                            <input type="submit" value="SUBMIT">
                                        </div>
                                    </form>
                                </div>
                            </main>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
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
