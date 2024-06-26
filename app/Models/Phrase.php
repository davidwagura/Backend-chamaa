<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phrase extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'phrase'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
