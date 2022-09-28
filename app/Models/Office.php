<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "description",
        "status",
        "location",
        "days",
        "places",
        "have_desk",
        "have_printer",
        "have_scanner",
        "have_fax",
        "have_internet",
        "have_meeting_room",
        "have_parking",
        "tranquility",
        "workspace",
        "give_coffee",
        "give_water",
        "have_fridge",
        "have_microwave",
        "have_garden",
        "accept_smoking",
        "accept_languages",
        "verified_at",
        "is_free",
    ];

    protected $casts = [
        "places" => "integer",
        "have_desk" => "boolean",
        "have_printer" => "boolean",
        "have_scanner" => "boolean",
        "have_fax" => "boolean",
        "have_internet" => "boolean",
        "have_meeting_room" => "boolean",
        "have_parking" => "boolean",
        "tranquility" => "integer",
        "workspace" => "integer",
        "give_coffee" => "boolean",
        "give_water" => "boolean",
        "have_fridge" => "boolean",
        "have_microwave" => "boolean",
        "have_garden" => "boolean",
        "accept_smoking" => "boolean",
        "accept_languages" => "array",
        "location" => "object",
        "days" => "array",
        "status" => StatusEnum::class,
        "verified_at" => "datetime",
        "is_free" => "boolean",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function searches(): HasMany
    {
        return $this->hasMany(OfficeSearch::class);
    }
}
