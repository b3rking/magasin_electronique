<form action="{{ route('factures.update', $facture->id) }}" method="POST">
    <h2>modifier facture</h2>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    @csrf
    @method('put')
    <div class="">
        <label for="name">nom de l'equipement</label>
        <select name="equipement" id="">
            @foreach ($equipements as $eq)
                <option value="{{ $eq->nomequipement }}" {{ ($eq->nomequipement === $facture->nomequipement ) ? "selected" : "" }}>{{ $eq->nomequipement }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <label for="montant">montant</label>
        <input type="text" name="montant" id="" value="{{ $facture->montant }}">
    </div>

    <div class="">
        <label for="datevente">date de vente</label>
        <input type="date" name="datevente" id="" value="{{ $facture->datevente }}">
    </div>

    <div class="">
        <label for="quantité">quantité</label>
        <input type="text" name="quantité" id="" value="{{ $facture->quantité }}">
    </div>

    <button type="submit">mettre a jour</button>
</form>