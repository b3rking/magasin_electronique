<h2>liste des equipements</h2>
<ul>
    @foreach ($equipements as $fr)
        <li>nom de l'equipement : {{ $fr->nomequipement }} | {{ $fr->marque }} | {{ $fr->prixequipement }} Fbu</li>
        <form action="{{ route('equipements.destroy', $fr->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">supprimer</button>
        </form>
    @endforeach
</ul>