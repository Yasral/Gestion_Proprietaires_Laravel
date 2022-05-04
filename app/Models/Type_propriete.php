<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_propriete extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function propriete()
    {
        return $this->hasMany(propriete::class);
    }
}
