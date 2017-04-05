  @if(!Auth::check())

 <li><a href="{{url('/register')}}">Register</a></li>
 <li><a href="{{url('/login')}}">Login</a></li>


 @else

                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logged {{Auth::user()->name}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                <div id="navbar" class="navbar-collapse collapse">
                </div>
                </ul>
                  </li>          
          </ul>

 
 @endif