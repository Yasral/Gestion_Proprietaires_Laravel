<?php

namespace App\Models;

use App\Models\Quartier;
use App\Models\Proprietaire;
use App\Models\Type_propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function typePropriete()
    {
        return $this->belongsTo(Type_propriete::class);
    }
    
    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }
}
