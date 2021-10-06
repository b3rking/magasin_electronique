<form action="{{ route('factures.store') }}" method="POST">
    <h2>nouvelle facture</h2>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    @csrf
    <div class="">
        <label for="name">nom du de l'equipement</label>
        <select name="equipement" id="">
            @foreach ($equipements as $eq)
                <option value="{{ $eq->nomequipement }}">{{ $eq->nomequipement }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <label for="montant">montant</label>
        <input type="text" name="montant" id="">
    </div>

    <div class="">
        <label for="datevente">date de vente</label>
        <input type="date" name="datevente" id="">
    </div>

    <div class="">
        <label for="quantité">quantité</label>
        <input type="text" name="quantité" id="">
    </div>

    <button type="submit">ajouter un equipement</button>
</form>