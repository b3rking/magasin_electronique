@extends('app')
@section('page', 'liste des utilisateurs')
@section('content')

<h2>liste des utilisateurs</h2>
<ul>
    @foreach ($users as $us)
        <li><h4>nom de l'utilisateur : {{ $us->nomemploye }}</h4></li>
        <li>prenom de l'utilisateur : {{ $us->prenomemploye }}</li>
        <li>role de l'utilisateur : {{ $us->role }}</li>
        <form action="{{ route('users.destroy', $us->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">supprimer</button>
        </form>
    @endforeach
</ul>

@endsection