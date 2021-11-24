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

    //i was guessing here, do not know if thats good guess because I am unable to recall it into my view
    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

}
