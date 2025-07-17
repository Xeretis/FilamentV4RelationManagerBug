<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class CompanyOpeningHour extends Model
{
    protected $fillable = [
        'monday_open_time'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
