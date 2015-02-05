<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/font-awesome.min.css') }}">

<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-production.min.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-skins.min.css') }}">

<!-- SmartAdmin RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-rtl.min.css') }}"> -->

<!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/your_style.css') }}"> -->

<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/demo.min.css') }}">-->

<style type="text/css" media="screen">
    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url({{ URL::asset('smartadmin/fonts/opensans/v8/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff'); }}) format('woff');
    }
    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans'), local('OpenSans'), url({{ URL::asset('smartadmin/fonts/opensans/v8/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff'); }}) format('woff');
    }
    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url({{ URL::asset('smartadmin/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff'); }}) format('woff');
    }
    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url({{ URL::asset('smartadmin/fonts/opensans/v8/xjAJXh38I15wypJXxuGMBobN6UDyHWBl620a-IRfuBk.woff'); }}) format('woff');
    }
    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url({{ URL::asset('smartadmin/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxjqR_3kx9_hJXbbyU8S6IN0.woff'); }}) format('woff');
    }
</style>

<!-- FAVICONS -->
<link rel="shortcut icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico') }}" type="image/x-icon">

<!-- GOOGLE FONT -->
<link rel="stylesheet" href="{{ URL::asset('smartadmin/fonts/fonts.googleapis.css') }}">

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
<link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-landscape.png') }}"
      media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
<link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-portrait.png') }}"
      media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/iphone.png') }}" media="screen and (max-device-width: 320px)">
