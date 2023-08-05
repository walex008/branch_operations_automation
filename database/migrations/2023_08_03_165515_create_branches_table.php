<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\HeadOffice::class, 'head_office_id');
            $table->foreignIdFor(\App\Models\Zone::class, 'zone_id');
            $table->foreignIdFor(\App\Models\Area::class, 'area_id');
            $table->string('name', 255);
            $table->timestamp('opening_date');
            $table->string('address');
            $table->string('status');
            $table->tinyText('description');
            $table->integer('created_by');
            $table->tinyInteger('is_system')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
