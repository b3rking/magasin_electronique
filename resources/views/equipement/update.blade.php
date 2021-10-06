@extends('app')
<form action="{{ route('fournisseurs.update', $fournisseur->id) }}" method="POST">
    <h2>nouveau fournisseur</h2>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    @csrf
    @method('put')
    <div class="">
        <label for="name">nom du fournisseur</label>
        <input type="text" name="nomfournisseur" id="" value="{{ $fournisseur->nomfournisseur }}">
    </div>

    <button type="submit">creer un fournisseur</button>
</form>