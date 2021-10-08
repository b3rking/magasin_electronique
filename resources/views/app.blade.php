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

        h1:not(.mh), h2:not(.mh), h3:not(.mh) {
            color: rgb(68, 68, 68);
            margin: 10px 0;
            text-transform: capitalize;
        }

        ul li {
            list-style: none;
            font-size: 1.3rem;
            margin: 10px 0;
            text-transform: capitalize;
        }

        .main-title {
            /* text-align: center; */
            background: rgb(68, 68, 68);
            color: white;
            padding: 5px 0px;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            /* align-items: center; */
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
            /* text-align: center; */
        }

        

        .left{
            width: 30%;
            float: left;
            text-align: left;
        }

        .left a {
            font-size: 1.3rem;
            text-decoration: none;
            padding: 0 10px;
            color: inherit;
            text-transform: capitalize;
            line-height: 2rem;
        }

        .left a:hover {
            color: 777;
            font-weight: bold;
        }

        form div {
            margin: 10px auto;
        }

        label {
            margin-right: 20px;
            font-size: 1.2rem;
        }

        input {
            border: none;
            background: rgb(82, 82, 82, 0.3);
            padding: 5px 7px;
            font-size: 1.2rem;
            border-radius: 5px;
            color: rgb(36, 36, 36);
        }

        input::focus, input::active {
            background: rgba(119, 119, 119, 0.397);
        }

        select {
            border: none;
            padding: 8px 15px;
            border-radius: 5px; 
        }

        select::active, select::focus {
            outline: none;
        }

        select option {
            border: none;
            background: red;
        }

        button {
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 1.1rem;
            text-transform: capitalize;
            background: rgb(68, 68, 68);
            color: white;
        }
    </style>
</head>
<body>
    <div class="main-title">
        <a href="{{ route('home') }}">Accueil</a>
        <h1 class="mh">Magasin de vente electronique</h1>
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
            <p><a href="{{ route('users.index') }}">liste des utilisateurs</a></p>
            <p class=""><a href="{{ route('users.create') }}">ajouter un utilisateur</a></p>

            <p><a href="{{ route('fournisseurs.index') }}">liste des fournisseurs</a></p>
            <p class=""><a href="{{ route('fournisseurs.create') }}">ajouter un fournisseur</a></p>

            <p><a href="{{ route('equipements.index') }}">liste des equipements</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement</a></p>

            <p><a href="{{ route('factures.index') }}">liste des factures</a></p>
            <p class=""><a href="{{ route('factures.create') }}">ajouter un facture</a></p>
        @else
            <p><a href="{{ route('equipements.index') }}">liste des equipements</a></p>
            <p class=""><a href="{{ route('equipements.create') }}">ajouter un equipement</a></p>

            <p><a href="{{ route('factures.index') }}">liste des factures</a></p>
            <p class=""><a href="{{ route('factures.create') }}">ajouter un facture</a></p>
        @endif
    </div>
    <div class="right">
        @yield('content')
    </div>
</body>
</html>
