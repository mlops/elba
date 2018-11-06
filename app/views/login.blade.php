<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <title>Simple Login</title>
    </head>
<body>
  {{--   <?php echo Form::open(array('url' => 'login', 'role' => 'form')) ?> --}}
    {{ Form::open(array('url' => '', 'method' => 'post')) }}
        <h2>Please sign in</h2>
        <!-- if there are login errors, show them here -->
        <p>
            <?php  if(Session::has('flash_notice')): ?>
                <div id="flash_notice"><?php echo Session::get('flash_notice') ?></div>
            <?php endif; ?>
        </p>
        <input type="text" name="username" value="{{ Input::old('username') }}" required="required" autofocus="autofocus" autocomplete="off" placeholder="Username" />
        <input name="password" placeholder="Password" required="required" type="password" />
        <input type="submit" value="Sign in" />
    {{ Form::close() }}
</body>
</html>