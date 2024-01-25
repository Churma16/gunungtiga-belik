<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageGovernment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getFormattedPurnaTugasAttribute()
    {
        return date('d F Y', strtotime($this->attributes['purna_tugas']));
    }
}
