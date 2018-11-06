<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Authentication - Registration </title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        
      <h2>Laravel Authentication - Registration</h2>
      <?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
      @foreach ($messages as $msg)
        {{ $msg }}
    @endforeach


    {{ Form::open() }}
    {{ Form::label('email', 'Email address: ') }} {{ Form::text('email', Input::old('email')) }}<br> 
    {{ Form::label('password', 'Password: ') }}  {{ Form::password('password') }}<br>
    {{ Form::label('password_confirm','Retype Password: ') }} {{ Form::password('password_confirm') }}<br>
    {{ Form::label('name', 'Name: ') }}        {{ Form::text('name', Input::old('name')) }}<br>
    {{ Form::label('admin', 'Admin?: ') }} {{ Form::checkbox('admin','true',Input::old('admin')) }}<br>
    {{ Form::submit('Register!') }}
    {{ Form::close() }}


    </body>
</html>