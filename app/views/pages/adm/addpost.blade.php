<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>welcome</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
.container {
    margin: 0 auto;
    text-align: center;
    margin-top: 200px;

}
        </style>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
    
    @if(Auth::check())
        <section class="container">
            <div class="content">
                <h1> admin Area {{ Auth::user()->name }}! - <strong>{{ HTML::linkRoute('logout', 'Logoutt') }}</strong></h1>
                <form name="add_post" method="POST" action="{{ URL::route('add_new_post') }}">
                <p><input type="text" name="title" placeholder="Post Title" value="" /></p>
                <p><textarea name="content" placeholder="Post Content"></textarea></p>
                <p><input type="submit" name="submit" /></p>
                </form>
            </div><!-- /.content -->
        </section><!-- /.container -->
    @else
        <section class="container">
            <div class="login">
                <h1>Admin</h1>
                <form name="login" method="POST" action="{{ URL::Route('login') }}">
                <p><input type="text" name="email" value="" placeholder="Email" /></p>
                <p><input type="password" name="password" value="" placeholder="Password" /></p>
                <p class="submit"><input type="submit" name="commit" value="Login" /></p>

                </form>
            </div><!-- /.login -->
        </section><!-- /.container -->
    @endif

    </body>
</html>