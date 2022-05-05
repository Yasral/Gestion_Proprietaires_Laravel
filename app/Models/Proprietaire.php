<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    

    protected $fillable = [
         'Prenom_proprietaire', 'Date_naissance', 'Lieu_naissance', 'code_piece_identite', 'Numero_piece_identite', 'genre', 'civilite', 'Adresse', 'Email'
     ];

    use HasFactory;

    public function propriete()
    {
        return $this->hasmany(propriete::class);
    }
}
