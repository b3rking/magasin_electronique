@extends('app')
@section('page', 'liste des utilisateurs')
@section('content')

<h2>liste des utilisateurs</h2>
<ul>
    @foreach ($users as $us)
        <li>nom du utilisateur : {{ $us->nomemploye }}</li>
        <form action="{{ route('users.destroy', $us->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">supprimer</button>
        </form>
    @endforeach
</ul>

@endsection