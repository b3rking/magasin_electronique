@extends('app')
@section('page', $equipement->nomequipement)
@section('content')
<p>nom de l'equipement : {{ $equipement->nomfournisseur }}</p>
<p>marque : {{ $equipement->marque }}</p>
<p>prix : {{ $equipement->prixequipement }}</p>
<p>date de livraison : {{ $equipement->datelivraison }}</p>
@endsection