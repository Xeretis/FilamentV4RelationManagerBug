<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Company extends Model
{
    public function openingHours(): HasMany
    {
        return $this->hasMany(CompanyOpeningHour::class);
    }
}
