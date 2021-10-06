<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = ['montant', 'equipement', 'quantité', 'datevente'];

    public function equipement()
    {
        return $this->belongsTo(Equipement::class);
    }
}
