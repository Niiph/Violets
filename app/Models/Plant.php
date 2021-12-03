<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'original_name', 'description', 'breeder_id', 'group_id', 'image', 'chimera'];

    public function breeder()
    {
        return $this->belongsTo(Breeder::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
