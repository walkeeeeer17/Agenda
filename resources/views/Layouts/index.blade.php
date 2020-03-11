<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Agenda</title>
</head>
<body>
    <div style="width:100%;height:80px;background:#3c434a;">
    <div class="mr-5">
    <header class="menu mr-5 pt-3">
        <ul class="list-group list-group-horizontal float-right">
            <li class="list-group-item">
                <a href="/">
                    Home
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{route('agenda.create')}}">
                    Adicionar
                </a>
            </li>
        </ul>
    </header>
    </div>
    </div>
    <div class="container-fluid">
    @yield('content')
    </div>


    <footer class="container py-5">
        <div style="text-align:center">
            &copy; Gabriel Pellin Caetano - Agenda Engeselt SP
        </div>
        
    </footer>

</body>
</html>