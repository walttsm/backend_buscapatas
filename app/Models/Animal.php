<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'race',
        'color',
        'age',
        'friendliness',
        'size',
        'sex',
        'details',
        'last_latitude',
        'last_longitude',
        'status',
        'owner_id',
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }
}
