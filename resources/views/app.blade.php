<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electro Mag | @yield('page')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 15px;
            font-weight: 300;
        }
        body {
            font-family: 'Lato', sans-serif;
        }

        h1, h2, h3 {
            color: rgb(68, 68, 68);
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Electro Mag</h1>
    <header>
        <a href="{{ route('home') }}">Accueil</a>
        <div class="">
            <h3>links</h3>
            <p><a href="{{ route('fournisseurs.index') }}">liste des fournisseurs!</a></p>
            <p class=""><a href="{{ route('fournisseurs.create') }}">ajouter un fournisseur!</a></p>

            <p><a href="{{ route('equipements.index') }}">liste des equipements!</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement!</a></p>

            <p><a href="{{ route('factures.index') }}">liste des factures!</a></p>
            <p class=""><a href="{{ route('factures.create') }}">ajouter un facture!</a></p>
        </div>
    </header>
    @yield('content')
</body>
</html>
