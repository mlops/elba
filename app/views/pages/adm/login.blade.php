<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
       {{ Form::open(array('url' => 'login')) }}
       <h1>Login</h1>

       <!-- if there are login errors, show them here -->
       <p>
           {{ $errors->first('email') }}
           {{ $errors->first('password') }}
       </p>
       <p><h2>{{ HTML::linkRoute('logout', 'Logout') }}</h2></p>

       <p>
           {{ Form::label('email', 'Email Address') }}
           {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
       </p>

       <p>
           {{ Form::label('password', 'Password') }}
           {{ Form::password('password') }}
       </p>

       <p>{{ Form::submit('Submit!') }}</p>
       {{ Form::close() }}
    </body>
</html>