<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeder extends Model
{
    use HasFactory;

    protected $table = 'breeders';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'original_name', 'shortcut'];

    public function plants()
    {
        return $this->hasMany(Plant::class);
    }

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

}
