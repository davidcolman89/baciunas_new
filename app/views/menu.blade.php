<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/baciunas">Baciunas</a>
        </div>
        <div class="navbar-collapse collapse">

            <!-- INICIO LISTA MENU  -->

            <ul class="nav navbar-nav ">
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-id-menu="1">Sistema</a>
                    <ul class="dropdown-menu">

                        <li class="">

                            <a href="#">Salir</a>

                        </li>


                    </ul>

                </li>


                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-id-menu="2">Clientes</a>
                    <ul class="dropdown-menu">

                        <li class="">

                            <a href="{{ URL::route('clientes.index') }}">Tabla de Clientes</a>

                        </li>


                    </ul>

                </li>
            </ul>
            <!-- FIN LISTA MENU  -->
        </div>
    </div>
</div>