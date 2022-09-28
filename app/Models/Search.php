<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Search extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "description",
        "status",
        "location",
        "distance",
        "verified_at",
    ];

    protected $casts = [
        "distance" => "integer",
        "location" => "object",
        "status" => StatusEnum::class,
        "verified_at" => "datetime",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function offices(): HasMany
    {
        return $this->hasMany(OfficeSearch::class);
    }
}
