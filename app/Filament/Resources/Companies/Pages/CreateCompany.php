<?php

declare(strict_types=1);

namespace App\Filament\Resources\Companies\Pages;

use App\Filament\Resources\Companies\CompanyResource;
use App\Models\CompanyOpeningHour;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

final class CreateCompany extends CreateRecord
{
    protected static string $resource = CompanyResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $model = new CompanyOpeningHour();

        $model->monday_open_time = $data['monday_open_time'];

        unset($data['monday_open_time']);

        $record = parent::handleRecordCreation($data);

        $model->company_id = $record->id;
        $model->save();

        return $record;
    }
}
