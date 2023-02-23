<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
        <style>  
        .custom_bg{

                background: #dddddd;
            }

        .registration_box {
                padding: 10px 40px;
                box-shadow: rgba(0,0,.5,#000);
                border-radius: 5px;
                box-shadow: 0,0,1,2,#000;
                box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
         }

        .form-control:focus {
                border-color: #3f51b5!important;
                box-shadow: none!important;
        }

        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @guest
                @else


                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
             
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                              </li>
                             
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>

            
                @endguest
               
                </div>
            </div>
        </div>

       @yield('content')
    </body>
</html>
