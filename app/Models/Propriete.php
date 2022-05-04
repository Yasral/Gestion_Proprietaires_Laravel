<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function proprietaire()
    {
        return $this->belongTo(proprietaire::class);
    }

    public function type_propriete()
    {
        return $this->belongTo(type_propriete::class);
    }
    
    public function quartier()
    {
        return $this->belongTo(quartier::class);
    }
}
