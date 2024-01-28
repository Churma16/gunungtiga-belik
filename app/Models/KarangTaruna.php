<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KarangTaruna
 *
 * @property int $id
 * @property string $purna_tugas
 * @property string $formatted_purna_tugas
 */
class KarangTaruna extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the formatted purna tugas attribute.
     *
     * @return string
     */
    public function getFormattedPurnaTugasAttribute()
    {
        return date('d F Y', strtotime($this->attributes['purna_tugas']));
    }
}
