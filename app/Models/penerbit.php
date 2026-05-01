<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relation\HasMany\Model;

class Penerbit extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bukus(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}

