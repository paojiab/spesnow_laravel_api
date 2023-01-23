<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unlock extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'user_id',
        'rental_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rental() {
        return $this->belongsTo(Rental::class);
    }
}