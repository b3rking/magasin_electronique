<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electro Mag | @yield('page')</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-5D0ofs3AsWoKsspH9kCWlY7qGxnHvdN/Yz2rTNwD9L271Mno85s+5ERo03qk9SUNtdgOZ4A9t8kRDexkvnWByA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>
<body>
    {{-- @auth
      <a href="{{ route('logout') }}">deconnection</a>
    @endauth
    @guest
      <a href="{{ route('loginpage') }}">connexion</a>
    @endguest --}}
    <header>
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
