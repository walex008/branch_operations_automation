<?php

use App\Models\HeadOffice;
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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(HeadOffice::class, 'head_office_id');
            $table->string('name')->unique();
            $table->string('address')->nullable();
            $table->timestamp('opening_date')->nullable();
            $table->string('status')->default('active');
            $table->tinyText('description')->nullable();
            $table->integer('created_by')->nullable();
            $table->tinyInteger('is_system')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
