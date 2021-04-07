<?php

namespace App\Models;

use App;
use App\Casts\StartedAt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends Model
{
    use HasFactory;

    protected $appends = ['localization', 'is_over'];

    protected $casts = [
        'winners' => 'json',
        'started_at' => StartedAt::class,
    ];

    public function localizations()
    {
        return $this->hasMany(Localization::class);
    }

    public function getLocalizationAttribute(): Localization
    {
        return $this->localizations
            ->where('locale', App::getLocale())
            ->first();
    }

    public function getIsOverAttribute(): bool
    {
        return ! empty($this->winners);
    }
}
