<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> Baciunas </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/bootstrap.min.css'); }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/font-awesome.min.css'); }}">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-production.min.css'); }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-skins.min.css'); }}">

    <!-- SmartAdmin RTL Support is under construction
    This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
    specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/demo.min.css'); }}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico'); }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico'); }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
    Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ URL::asset('smartadmin/img/splash/sptouch-icon-iphone.png'); }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad.png'); }}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{ URL::asset('smartadmin/img/splash/touch-icon-iphone-retina.png'); }}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad-retina.png'); }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-landscape.png'); }}"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-portrait.png'); }}"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/iphone.png'); }}"
          media="screen and (max-device-width: 320px)">

    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>
</head>
<body class=" desktop-detected pace-done" style="">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> Baciunas </span>
        <!-- END LOGO PLACEHOLDER -->

    </div>
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="" alt="John Doe" class="online">
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <!--        <form action="search.html" class="header-search pull-right">-->
        <!--            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">10 results are available, use up and down arrow keys to navigate.</span><input id="search-fld" type="text" name="param" placeholder="Find reports and more" data-autocomplete="[]" class="ui-autocomplete-input" autocomplete="off">-->
        <!--            <button type="submit">-->
        <!--                <i class="fa fa-search"></i>-->
        <!--            </button>-->
        <!--            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>-->
        <!--        </form>-->
        <!-- end input: search field -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

    </div>
</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <!--                        <img src="" alt="me" class="online">-->
                        <span>Usuario</span>
                        <!--                        <i class="fa fa-angle-down"></i>-->
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul style="">
            <li class="active">
                <a href="{{ URL::route('home') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span
                        class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Listados</span><b
                        class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                <ul>
                    <li><a href="{{ URL::route('clientes.index') }}">Clientes</a></li>
                    <li><a href="{{ URL::route('ctasCtesCli.index') }}">Cuentas Corrientes</a></li>
                </ul>
            </li>

        </ul>
    </nav>
<span class="minifyme" data-action="minifyMenu">
<i class="fa fa-arrow-circle-left hit"></i>
</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            @yield('url_historial')
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">


        <!-- widget grid -->
        <section id="widget-grid" class="">
            @yield('contenido')

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Baciunas</span>
        </div>


    </div>
</div>
<!-- END PAGE FOOTER -->


<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script data-pace-options="{ &quot;restartOnRequestAfter&quot;: true }"
        src="{{ URL::asset('smartadmin/js/plugin/pace/pace.min.js'); }}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="{{ URL::asset('smartadmin/js/libs/jquery-2.0.2.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/libs/jquery-ui-1.10.3.min.js'); }}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="{{ URL::asset('smartadmin/js/bootstrap/bootstrap.min.js'); }}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{ URL::asset('smartadmin/js/notification/SmartNotification.min.js'); }}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{ URL::asset('smartadmin/js/smartwidgets/jarvis.widget.min.js'); }}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{ URL::asset('smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js'); }}"></script>

<!-- SPARKLINES -->
<script src="{{ URL::asset('smartadmin/js/plugin/sparkline/jquery.sparkline.min.js'); }}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{ URL::asset('smartadmin/js/plugin/jquery-validate/jquery.validate.min.js'); }}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{ URL::asset('smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js'); }}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{ URL::asset('smartadmin/js/plugin/select2/select2.min.js'); }}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{ URL::asset('smartadmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js'); }}"></script>

<!-- browser msie issue fix -->
<script src="{{ URL::asset('smartadmin/js/plugin/msie-fix/jquery.mb.browser.min.js'); }}"></script>

<!-- FastClick: For mobile devices -->
<script src="{{ URL::asset('smartadmin/js/plugin/fastclick/fastclick.min.js'); }}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="{{ URL::asset('smartadmin/js/app.min.js'); }}"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="{{ URL::asset('smartadmin/js/plugin/datatables/jquery.dataTables.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/datatables/dataTables.colVis.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/datatables/dataTables.tableTools.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/datatables/dataTables.bootstrap.min.js'); }}"></script>

@include('footer')
@yield('js')
</body>
</html>