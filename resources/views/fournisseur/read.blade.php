@extends('app')

<h2>liste des fournisseurs</h2>
<ul>
    @foreach ($fournisseurs as $fr)
        <li>nom du fournisseur : {{ $fr->nomfournisseur }}</li>
        <form action="{{ route('fournisseurs.destroy', $fr->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">supprimer</button>
        </form>
    @endforeach
</ul>