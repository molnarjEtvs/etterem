<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="container-fluid bg-primary ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
                        <div class="container-fluid">
                          <ul class="navbar-nav">
                            
                            <li class="nav-item">
                              <a class="nav-link text-white" href="{{route('fooldal')}}">Főoldal</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('etelek')}}">Ételek</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('mundo')}}">Amanda</a>
                            </li>
                          </ul>

                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="container-fluid bg-dark text-white">
        <div class="container">
            <div class="col-12">
                <div class="p-4 text-center">
                    Étterem &copy;
                </div>
            </div>
        </div>
    </footer>
</body>
</html>