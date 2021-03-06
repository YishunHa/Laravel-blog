<!-- default bootstrap navbar -->
<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="http://apple.com"><span class="glyphicon glyphicon-apple" style="font-size:25px;border-radius:50%;margin:0;"></span></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li class="{{ Request::is('/') ? "active" :""}}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
    <li class="{{ Request::is('blog') ? "active" :""}}"><a href="/blog">Blogs</a></li>
    <li class="{{ Request::is('contact') ? "active" :""}}"><a href="/contact">Contact</a></li>
  </ul>
  <form class="navbar-form navbar-left">

  </form>
  <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Controll-Pannel</a></li>

        @else

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                      <li><a href="{{ url('/posts') }}">My Post</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">More function to be added</a></li>
                      <li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endif

  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
