<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
				<link rel="stylesheet" media="screen" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
			@include('layouts.partials.navbar')
			<div class="container">
				<div class="col-xs-12">@include('layouts.partials.notifications')</div>
				@yield('content')
			</div>
			<script type="text/javascript" src="{{ elixir('js/vendor.js') }}"></script>
			<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
