<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
<nav class="navbar navbar-default fixed-top navbar-static-top" role="navigation" style="background: #033649;color: white">
  <div id="banner" class="text-center">
    <strong style="color: white">
      Vous voulez un site web pour votre business? <i class="fa fa-phone"></i> applez-nous au +8615868486490 ou envoyez nous un email sur <i class="fa fa-email"></i> <a href="mailto:ibrahimasalamatabah18@hotmail.com" style="color: white">ibrahimasalamatabah18@hotmail.com</a>
    </strong>
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ route('root_path') }}"><img src="{{ asset('/images/logo.png') }}"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 bs-megadropdown-tabs">
      <ul class="nav navbar-nav">
        <li class="{{ set_active_route('root_path') }}">
          <a href="{{ route('root_path') }}"><i class="fa fa-home fa-fw"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="{{ set_active_route('about_path') }}">
          <a href="{{ route('about_path') }}"><i class="fa fa-link"></i> About</a>
        </li>
        <li>
          <a href="#"><i class="glyphicon glyphicon-eye-open"></i> FAQ</a>
        </li>
        <li class="{{ set_active_route('contact.create') }}">
          <a href="{{ route('contact.create') }}"><i class="fa fa-envelope fa-fw"></i> Contact</a>
        </li>
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list-alt"></i> Forum <span class="caret"></span></a>       
          <div class="dropdown-menu mega-dropdown-menu">
            <div class="container-fluid">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="men">
                  <ul class="nav-list list-inline">
                    <li>
                      <a href="{{ route('forum_path') }}"><img src="{{ asset('/images/logo.png') }}"><span>Tous</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Football</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Soccer</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Men's Training</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Women's Training</span></a>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane" id="women">
                  <ul class="nav-list list-inline">
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Running</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Football</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Soccer</span></a>
                    </li>                                
                  </ul>
                </div>
                <div class="tab-pane" id="kids">
                  <ul class="nav-list list-inline">
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Running</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Football</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Soccer</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Men's Training</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Women's Training</span></a>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane" id="sports">
                  <ul class="nav-list list-inline">                                
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Basketball</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Football</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Soccer</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Men's Training</span></a>
                    </li>
                    <li>
                      <a href="#"><img src="{{ asset('/images/logo.png') }}"><span>Women's Training</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#men" role="tab" data-toggle="tab">Men</a>
              </li>
              <li>
                <a href="#women" role="tab" data-toggle="tab">Women</a>
              </li>
              <li>
                <a href="#kids" role="tab" data-toggle="tab">Kids</a>
              </li>
              <li>
                <a href="#sports" role="tab" data-toggle="tab">Sports</a>
              </li>
            </ul>                    
          </div> 
        </li> 
      </ul>
      @if (Route::has('login_path'))
        <ul class="nav navbar-nav navbar-right">        
        @auth
          <li><a href="{{ url('root_path') }}">Home</a></li>
          <li><a href="#"><img src="{{ $logged_logo }}"><span>Soccer</span></a></li>
        @else
          <li><a href="{{ route('login_path') }}" class="glyphicon glyphicon-log-in"> Login</a></li>
        @endauth
      @endif
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
