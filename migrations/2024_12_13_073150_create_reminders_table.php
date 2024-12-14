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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('reminder_name');
            $table->text('reminder_desc')->nullable();
            $table->foreignId(
                'type_id'
                )->default(1)->constrained('types')->onDelete('cascade');
            $table->decimal('reminder_amount')->nullable();
            $table->date('start_date');
            $table->foreignId('frequency_id')->constrained('frequencies')->onDelete('cascade');
            $table->string('frequency_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
