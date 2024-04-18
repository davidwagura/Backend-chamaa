<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function password()
    {
        return $this->hasOne(Password::class);
    }

    public function paymail()
    {
        return $this->hasOne(Paymail::class);
    }

    public function phrase()
    {
        return $this->hasOne(Phrase::class);
    }

    public function username()
    {
        return $this->hasOne(Username::class);
    }
}
