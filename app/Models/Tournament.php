<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
        'updated_at',
        'created_at',
    ];

    protected $casts = [
        'winners' => 'json',
    ];

    public function localizations()
    {
        return $this->hasMany(Localization::class);
    }
}
