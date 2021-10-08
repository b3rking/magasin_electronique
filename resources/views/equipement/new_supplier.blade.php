@extends('app')
@section('page', 'nouveau equipement')
@section('content')

    <form action="{{ route('equipements.store') }}" method="POST">
        <h2>nouvelle equipement</h2>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        @csrf
        <div class="">
            <label for="name">nom du de l'equipement</label>
            <input type="text" name="nomequipement" id="">
        </div>

        <div class="">
            <label for="fournisseur">fournisseur</label>
            <select name="fournisseur">
                @foreach ($fournisseurs as $fs)
                    <option value="{{ $fs->nomfournisseur }}">{{ $fs->nomfournisseur }}</option>
                @endforeach
            </select>
        </div>

        <div class="">
            <label for="marque">marque</label>
            <input type="text" name="marque" id="">
        </div>

        <div class="">
            <label for="prix">prix de l'equipement</label>
            <input type="text" name="prixequipement" id="">
        </div>

        <div class="">
            <label for="quantité">quantité</label>
            <input type="text" name="quantité" id="">
        </div>

        <button type="submit">ajouter un equipement</button>
    </form>

@endsection
