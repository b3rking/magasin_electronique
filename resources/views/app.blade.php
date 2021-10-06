<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electro Mag | @yield('page')</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Electro Mag</a>
        <div class="">
            <h3>links</h3>
            <p><a href="{{ route('fournisseurs.index') }}">liste des fournisseurs!</a></p>
            <p class=""><a href="{{ route('fournisseurs.create') }}">ajouter un fournisseur!</a></p>

            <p><a href="{{ route('equipements.index') }}">liste des equipements!</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement!</a></p>
        </div>
    </header>
    @yield('content')
</body>
</html>
