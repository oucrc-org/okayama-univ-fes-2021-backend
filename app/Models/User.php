<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'google_id',
        'display_name',
        'email',
        'email_verified',
        'avatar_url',
        'family_name',
        'given_name',
        'family_name_kana',
        'given_name_kana',
        'email',
        'secondary_email',
        'tel',
        'postal_code',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];


    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class);
    }

    public function presents(): BelongsToMany
    {
        return $this->belongsToMany(Present::class)->withTimestamps();
    }
}
