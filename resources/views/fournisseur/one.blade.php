@extends('app')
@section('page', $fournisseur->nomfournisseur)
@section('content')    
    <p>nom du  fournisseur {{ $fournisseur->nomfournisseur }}</p>
@endsection