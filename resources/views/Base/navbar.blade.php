<nav class="navbar navbar-expand-md navbar-laravel bg-perso shadow-perso">
    <div class="container">
        <a class="navbar-brand-perso" href="{{ url('/') }}">
            {{ config('app.name', 'Winstaller') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <!-- Navbar à Gauche permanent-->
                <a class="nav-link-perso" href="{{ url('/projets') }}">Projets<span class="sr-only"></span></a>
                <!-- Connexion -->
                @if (Route::has('login'))
                @auth
                <!-- Navbar à Gauche Authentifié-->
                <!--<a class="nav-link-perso" href="{{ url('/home') }}">Home Authentifié <span class="sr-only">(current)</span></a>-->
            </ul>
            @else
            <!-- Navbar à Gauche non Authentifié-->
            <!--<a class="nav-link-perso" href="{{ url('/') }}">Home non Authentifié<span class="sr-only">(current)</span></a>-->
            </ul>      
            @endauth
            <!-- Navbar à Droite -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @auth

                @role('Admin')
                <li><a class="nav-link-perso" href="{{ route('users.index') }}">Manage Users</a></li>
                <li><a class="nav-link-perso" href="{{ route('roles.index') }}">Manage Role</a></li>

                @endrole

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link-perso nav-linkDropdown-perso dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hey {{ Auth::user()->role }} {{ Auth::user()->name }} ! <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Déconnexion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link-perso" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link-perso" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                </li>
                @endif    
                @endauth
            </ul>
            @endif
        </div>
    </div>
</nav>


