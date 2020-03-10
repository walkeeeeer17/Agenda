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
    <div style="width:100%;height:130px;background:#3c434a">
    <header class="menu">
        <ul class="list-group list-group-horizontal float-right">
            <li class="list-group-item">
                Home
            </li>
            <li class="list-group-item">
                Adicionar
            </li>
        </ul>
    </header>
    </div>
    @yield('content')
    <footer class="footer">&copy; Gabriel Pellin Caetano</footer>
</body>
</html>