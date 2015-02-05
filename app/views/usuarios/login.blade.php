<!DOCTYPE html>
<html lang="en-us" id="extr-page">
<head>
    <meta charset="utf-8">
    <title> SmartAdmin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/bootstrap.min.css') }}">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-skins.min.css') }}">

    <!-- SmartAdmin RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/demo.min.css') }}">

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ URL::asset('smartadmin/img/splash/sptouch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('smartadmin/img/splash/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad-retina.png') }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-landscape.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-portrait.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/iphone.png') }}" media="screen and (max-device-width: 320px)">

</head>

<body class="animated fadeInDown">

<header id="header">

    <div id="logo-group">
        <h2>Baciunas</h2>
    </div>

</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content" class="container">

        <div class="row">
            <div class="col-md-1 col-lg-4 hidden-xs hidden-sm"></div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    <form action="index.html" id="login-form" class="smart-form client-form">
                        <header>
                            Log In
                        </header>

                        <fieldset>

                            <section>
                                <label class="label">E-mail</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="email" name="email">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="password">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
<!--                                <div class="note">-->
<!--                                    <a href="forgotpassword.html">Forgot password?</a>-->
<!--                                </div>-->
                            </section>

<!--                            <section>-->
<!--                                <label class="checkbox">-->
<!--                                    <input type="checkbox" name="remember" checked="">-->
<!--                                    <i></i>Stay signed in</label>-->
<!--                            </section>-->
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    </form>

                </div>
            </div>
            <div class="col-md-1 col-lg-4 hidden-xs hidden-sm"></div>
        </div>
    </div>

</div>

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script src="{{ URL::asset('smartadmin/js/plugin/pace/pace.min.js') }}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="{{ URL::asset('smartadmin/js/libs/jquery-2.0.2.min.js') }}"></script>

<script src="{{ URL::asset('smartadmin/js/libs/jquery-ui-1.10.3.min.js') }}"></script>


<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="{{ URL::asset('smartadmin/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{ URL::asset('smartadmin/js/plugin/jquery-validate/jquery.validate.min.js') }}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{ URL::asset('smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="{{ URL::asset('smartadmin/js/app.min.js') }}"></script>

<script type="text/javascript">
    runAllForms();

    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>

</body>
</html>