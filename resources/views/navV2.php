 <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-logo" href="{{ url('/') }}">
                    <img src="{{asset('storage/img/logo.png')}}" alt="logo it poslovi crna gora me">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/oglasi-za-posao">Poslovi</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Edukacija</a>
                        </li> -->
                    @guest
                    </ul>
                    <div class="nav-auth float-right">
                        <a class="btn singin" href="{{ route('login') }}">Prijava</a>
                        <a class="btn singup" href="{{ route('register') }}">Registruj se</a>
                    </div>
                    @else




                        <li class=" nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: #4c83ff;">Moj nalog</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/admin">Moj Panel</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest
                </div>  
            </div>
        </nav>