<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    use HasFactory;

    protected $casts = [
        'rules' => 'json',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
