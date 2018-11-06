
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  {{HTML::style('css/bootstrap.css')}}
  {{HTML::style('css/style.css')}}
  {{HTML::script('js/jquery.min.js')}}
  
    <title>Admin</title>
    <?php
    $s2 = Request::segment(2);
    ?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-topX">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Dashboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($s2 == 'pages') echo 'class="active'; ?> ><a href="{{url()}}/admin/pages">Pages</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('content')

    </div><!-- /.container -->

  </body>
</html>
