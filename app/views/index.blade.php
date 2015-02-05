<!DOCTYPE html>
<html>
<head>
    @include('header')
</head>
<body>
    @include('menu')
	<div class="container-fluid">
		<div class="row">
			<!--
            <div class="col-sm-3 col-md-2 sidebar">
				@yield('contenido_izquierdo')
			</div>
			-->
			<div class="col-md-12 main">
                @yield('contenido')
			</div>
		</div>
	</div>
</body>
<footer>
    @include('footer')
	@yield('js')
</footer>
</html>
