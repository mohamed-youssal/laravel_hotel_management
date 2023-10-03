<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'description',
        'daily_price',
        'state',
        'image'
    ];

    public function people(){
        $this->belongsTo(Person::class);
    }
}
