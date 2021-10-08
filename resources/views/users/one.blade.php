@extends('app')
@section('page', $user->nomemploye)
@section('content')
<p>nom de l'utilisateur {{ $user->nomemploye }}</p>
@endsection