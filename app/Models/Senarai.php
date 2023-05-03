<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senarai extends Model
{
    use HasFactory;

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
