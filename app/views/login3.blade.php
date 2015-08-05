<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title>
        @section('pagina_titulo')
        Login
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


<!-- MAIN PANEL -->
<div id="main" role="main">

    <div id="content" class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4"></div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">

                    {{ Form::open(array('method'=>'post','url' => '/login','class'=>'smart-form client-form','id'=>'login-form',"novalidate"=>"novalidate")) }}

                        <header>
                            Ingreso
                        </header>

                        <fieldset>

                            <section>
                                <label class="label">Usuario</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    {{ Form::text('usuario', null) }}
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Por favor ingrese el usuario</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    {{ Form::password('password') }}
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Ingrese la contraseña</b> </label>
                                <div class="note">

                                </div>
                            </section>
                            <section>
                                @if(Session::has('mensaje_error'))
                                    {{ Session::get('mensaje_error') }}
                                @endif
                            </section>

                        </fieldset>
                        <footer>
                            {{ Form::submit('Ingresar',array("class"=>"btn btn-primary","id"=>"btn-login"   )) }}
                        </footer>
                    {{ Form::close() }}

                </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4"></div>
        </div>
    </div>

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
<script type="text/javascript">
    runAllForms();

    $(function() {

        $("#login-form").validate({
            // Rules for form validation
            rules : {
                usuario : {
                    required : true
                },
                password : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                usuario : {
                    required : 'Por favor ingrese el usuario'
                },
                password : {
                    required : 'Por favor ingrese la contraseña'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            },
            submitHandler: function(form) {
                form.submit();
                //window.location="{{URL::to('home')}}";
            }
        });



    });
</script>
</body>
</html>