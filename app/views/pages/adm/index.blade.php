<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Elba</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    </head>
    <body>
<div id="wrapper">
    <header>
        <h1><a href="/admin">News</a></h1>
        <h2>{{ HTML::linkRoute('add_new_post', 'Add') }}</h2>
        <p>Bem Vindo</p>
        <h2>{{ HTML::linkRoute('logout', 'Logout') }}</h2>
    </header>
    <section id="main">
        <section id="content">
            @foreach($posts as $post)
            <article>
                <h2>{{ $post->title}}</h2>
                <p>{{ $post->content }}</p>
                <p><small>Posted By <strong>{{ $post->Author->name }}</strong> at <strong>{{ $post->created_at }}</strong></small></p>
            </article>
            @endforeach
            {{ $posts->links() }}
        </section><!-- /#contetnt -->
    </section><!-- /#main -->
    <footer>
        <section id="footer-area">
            <section id="footer-outer-block">
                <aside class="footer-segment">
                    <h4>Meu blog news</h4>

                </aside><!-- /.footer-segment -->
            </section><!-- /#footer-outer-block -->
        </section><!-- /#footer-area -->
    </footer>
</div><!-- /#wrapper -->
    </body>
</html>