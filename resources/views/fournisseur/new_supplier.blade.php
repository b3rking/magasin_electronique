@extends('app')
@section('page', 'nouveau fournisseur')
@section('content')

    <form action="{{ route('fournisseurs.store') }}" method="POST">
        <h2>nouveau fournisseur</h2>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        @csrf
        <div class="">
            <label for="name">nom du fournisseur</label>
            <input type="text" name="nomfournisseur" id="">
        </div>

        <button type="submit">creer un fournisseur</button>
    </form>

@endsection
