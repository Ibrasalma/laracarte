<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planete <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.laravel.com">Laravel.com</a></li>
            <li><a href="http://www.laravel.io">Laravel.io</a></li>
            <li><a href="http://www.laracasts.com">Laracasts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://www.larajobs.com">Larajobs</a></li>
            <li><a href="http://www.larachats.com">Larachats</a></li>
            <li><a href="http://www.laravel-news.com">Laravel news</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Artisans</a></li>
        <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">login</a></li>
            <li><a href="#">register</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>