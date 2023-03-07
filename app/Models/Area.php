<?php

namespace App\Models;

use App\Models\Incidence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function incidences()
    {
        return $this->hasMany(Incidence::class);
    }
}
