<?php

namespace App\Models;

use App\Models\Quartier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function quartier()
    {
        return $this->hasmany(Quartier::class);
    }
}
