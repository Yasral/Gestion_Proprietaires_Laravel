<?php

namespace App\Models;

use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function propriete()
    {
        return $this->hasMany(Propriete::class);
    }
}
