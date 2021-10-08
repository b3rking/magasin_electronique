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

        .main-title {
            text-align: center;
            background: rgb(68, 68, 68);
            color: white;
            padding: 5px 0px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            margin-bottom: 15px;
        }

        .main-title a {
            text-decoration: none;
            color: inherit;
            font-size: 1.3rem;
            font-weight: bold;
            text-transform: capitalize;
        }

        .main-title h1 {
            color: white;
        }

        .right{
            width: 70%;
            float: right;
            text-align: center;
        }

        .left{
            width: 30%;
            float: left;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="main-title">
        <a href="{{ route('home') }}">Accueil</a>
        <h1 class="">Magasin de vente electronique</h1>
        <div class="auth">
            @auth
                <a class="dropdown-item" href="{{ route('logout') }}">deconnexion</a>
                <p>{{ Auth::user()->nomemploye }} | {{ Auth::user()->role }}</p>
            @endauth
            @guest
                <a href="{{ route('login') }}">connexion</a>
            @endguest
        </div>
    </div>
    
    <div class="left">
        @if(Auth::user()->role=== "Gérant")
            <p><a href="{{ route('users.index') }}">liste des utilisateurs!</a></p>
            <p class=""><a href="{{ route('users.create') }}">ajouter un utilisateur!</a></p>

            <p><a href="{{ route('fournisseurs.index') }}">liste des fournisseurs!</a></p>
            <p class=""><a href="{{ route('fournisseurs.create') }}">ajouter un fournisseur!</a></p>

            <p><a href="{{ route('equipements.index') }}">liste des equipements!</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement!</a></p>

            <p><a href="{{ route('factures.index') }}">liste des factures!</a></p>
            <p class=""><a href="{{ route('factures.create') }}">ajouter un facture!</a></p>
        @else
            <p><a href="{{ route('equipements.index') }}">liste des equipements!</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement!</a></p>

            <p><a href="{{ route('factures.index') }}">liste des factures!</a></p>
            <p class=""><a href="{{ route('factures.create') }}">ajouter un facture!</a></p>
        @endif
    </div>
    <div class="right">
        @yield('content')
    </div>
</body>
</html>
