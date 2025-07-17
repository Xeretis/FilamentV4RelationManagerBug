<?php

declare(strict_types=1);

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('company_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->string('monday_open_time')->nullable();
            $table->foreignIdFor(Company::class);
            $table->timestamps();
        });
    }
};
