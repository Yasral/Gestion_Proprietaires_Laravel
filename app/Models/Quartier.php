<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quartier extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function propriete()
    {
        return $this->hasmany(Propriete::class);
    }
}
