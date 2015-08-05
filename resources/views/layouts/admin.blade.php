<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
				<link rel="stylesheet" media="screen" href="{{ elixir('css/admin/app.css') }}">
    </head>
    <body>
			<div class="container-fluid">
					@include('layouts.partials.sidebar')

				<div class="row">
					<div class="col-xs-12"><h1>@yield('heading')</h1></div>
					<div class="col-xs-12">@include('layouts.partials.notifications')</div>
					<div class="col-xs-12">
						@yield('content')
					</div>
				</div>
			</div>
			<script type="text/javascript" src="{{ elixir('js/vendor.js') }}"></script>
			<script type="text/javascript" src="{{ elixir('js/admin/app.js') }}"></script>
    </body>
</html>

