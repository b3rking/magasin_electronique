<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomequipement', 'marque', 'prixequipement', 'quantité', 'datelivraison', 'marque'
    ];

    public function facture()
    {
        return $this->hasMany(Facture::class);
    }
}
