<h2>liste des factures</h2>
<ul>
    @foreach ($factures as $fr)
        <li>nom de l'equipement : {{ $fr->equipement }} | date de vente : {{ $fr->datevente }} | {{ $fr->marque }} | {{ $fr->montant }} Fbu</li>
        <form action="{{ route('factures.destroy', $fr->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">supprimer</button>
        </form>
    @endforeach
</ul>