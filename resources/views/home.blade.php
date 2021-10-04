@extends('app')
@section('page', "page d'accueil")
@section('content')
    <h1>bienvenue chez Electro Mag</h1>
    @foreach($users as $user)
      <div class="">
        <h3>{{ $user->name }}</h3>
        <p>role : {{ $user->role->name }}</p>
        <p> <a href="{{ route('users.edit', $user->id) }}">modifier</a></p>
      </div>
    @endforeach
@endsection
