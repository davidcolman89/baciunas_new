<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title>
        @section('pagina_titulo')
        Inicio
        @show
    </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    @include('includes_head')
</head>
<body class="minified fixed-header fixed-ribbon">
<!-- HEADER -->
<header id="header">@include('panel_header')</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<aside id="left-panel">@include('panel_izquierdo')</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">
        @include('panel_ribbon')
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                @yield('header_subtitulo')
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8"></div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('contenido')
                </article>
                <!-- WIDGET END -->

            </div>

            <!-- end row -->

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">@include('panel_footer')</div>
<!-- END PAGE FOOTER -->
@include('panel_shortcut')
@include('includes_footer')
<script type="text/javascript">$(document).ready(function () {
        pageSetUp();
    });</script>
@yield('js')
</body>
</html>