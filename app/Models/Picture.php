<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'plant_id', 'main_photo'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
