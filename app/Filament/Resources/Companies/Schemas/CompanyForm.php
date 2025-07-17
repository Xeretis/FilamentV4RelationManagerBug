<?php

declare(strict_types=1);

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

final class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(function (): array {
                return [
                    Grid::make()
                        ->schema([
                            Section::make()
                                ->schema([
                                    TextInput::make('name')
                                        ->required(),
                                ]),
                            Section::make()
                                ->schema([
                                    TextInput::make('monday_open_time'),
                                ]),
                        ]),
                ];
            });
            // ->components([
            //     Grid::make()
            //         ->schema([
            //             Section::make()
            //                 ->schema([
            //                     TextInput::make('name')
            //                         ->required(),
            //                 ]),
            //             Section::make()
            //                 ->relationship('openingHours')
            //                 ->schema([
            //                     TextInput::make('monday_open_time'),
            //                 ]),
            //         ]),
            // ]);
    }
}
