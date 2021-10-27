<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    public static function targetQuestion(Carbon $date): Model
    {
        return self::query()
            ->where('finished_at', '>', $date)
            ->orderBy('finished_at')
            ->select('id', 'quiz')
            ->with('answers')
            ->firstOrFail();
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function stamp(): BelongsTo
    {
        return $this->belongsTo(Stamp::class);
    }
}
