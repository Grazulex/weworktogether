<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OfficeSearch extends Model
{
    use HasFactory;

    protected $fillable = ["search_id", "office_id", "distance"];

    protected $casts = [
        "distance" => "integer",
    ];

    public function search(): BelongsTo
    {
        return $this->belongsTo(Search::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
}
