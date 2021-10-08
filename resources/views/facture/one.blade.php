@extends('app')
@section('page', $facture->equipement)
@section('content')
<p>nom de l'equipement : {{ $facture->equipement }}</p>
<p>montant : {{ $facture->montant }}</p>
<p>date : {{ $facture->datevente }}</p>
@endsection