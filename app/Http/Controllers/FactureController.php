<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facture.read')
                ->with('factures', Facture::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facture.new_supplier')
                ->with('equipements', Equipement::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'montant' => 'required',
        ]);

        $data = $request->all();
        $data['montant'] = $request->montant * $request->quantité;

        Facture::create($data);

        return redirect()->route('factures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        return view('facture.one')
                ->with('facture', $facture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        return view('facture.update')
                ->with('facture', $facture)
                ->with('equipements', Equipement::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        $data = $request->all();
        $data['montant'] = $request->montant * $request->quantité;

        $facture->update($data);

        return redirect()->route('factures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        // $facture->delete();

        // return redirect()->route('factures.index');
    }
}
