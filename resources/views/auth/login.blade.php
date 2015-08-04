<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
				<link rel="stylesheet" media="screen" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
			<div class="container">
				<div class="row">
					<div class="form-signin">
						{!! Form::open(['route' => 'sessions.store', 'method' => 'post']) !!}
							<h2 class="form-signin--heading">Please sign in</h2>
							<label for="inputEmail" class="sr-only">Email address</label>
							{!! Form::input('email', 'email', '', ['class' => 'form-control', 'placeholder' => 'Email address', 'id' => 'inputEmail', 'required', 'autofocus']) !!}
							<label for="inputPassword" class="sr-only">Password</label>
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'inputPassword', 'required']) !!}
							<div class="checkbox">
								<label>
									{!! Form::checkbox('remember', 1, false) !!} Remember me
								</label>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						{!! Form::close() !!}
					</div><!-- form-sign-in -->
				</div><!-- row -->
			</div> <!-- /container -->
			<script type="text/javascript" src="{{ elixir('js/vendor.js') }}"></script>
			<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
