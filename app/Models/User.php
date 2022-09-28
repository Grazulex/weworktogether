<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use JeffGreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Filament\Models\Contracts\FilamentUser;
use RalphJSmit\Filament\Notifications\Concerns\FilamentNotifiable;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser
{
    use HasApiTokens, HasFactory, FilamentNotifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name", "email", "password", "limit", "is_admin"];

    public function canAccessFilament(): bool
    {
        return true;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "email_verified_at" => "datetime",
        "is_admin" => "boolean",
    ];

    public function offices(): HasMany
    {
        return $this->hasMany(Office::class);
    }

    public function searches(): HasMany
    {
        return $this->hasMany(Search::class);
    }

    public function getFullnameAttribute(): string
    {
        return $this->name .
            " | o:" .
            count($this->offices) .
            "-s:" .
            count($this->searches) .
            "-l" .
            $this->limit;
    }
}
