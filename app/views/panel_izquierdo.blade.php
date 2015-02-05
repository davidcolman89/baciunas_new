<!-- User info -->
<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->


                    <a href="javascript:void(0);" id="" data-action="">
                        <img src="{{ URL::asset('smartadmin/img/avatars/male.png') }}" alt="me" class="online"/>
						<span>
							USUARIO
						</span>
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
                    traditional href="{{ URL::asset('smartadmin/') }}" links. See documentation for details.
                    -->

    <ul>
        <li>
            <a href="{{ URL::route('home') }}" title="Inicio"><i class="fa fa-lg fa-fw fa-home"></i>
                <span class="menu-item-parent">Inicio</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Listados</span><b
                    class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
            <ul>
                <li><a href="{{ URL::route('clientes.index') }}">Clientes</a></li>
                <li><a href="{{ URL::route('ctasCtesCli.index') }}">Cuentas Corrientes</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Altas</span><b
                        class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
            <ul>
                <li><a href="{{ URL::route('clientes.create') }}">Clientes</a></li>
            </ul>
        </li>
    </ul>
</nav>
<span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>