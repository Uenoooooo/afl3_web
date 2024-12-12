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
            
            $table->foreignId('user_id')->nullable()->constrained(
                table: 'users',
                indexName: 'user_reminder_id'
            );
    
            $table->string('reminder_name');
            $table->text('reminder_desc')->nullable();
    
            $table->foreignId('type_id')->constrained(
                table: 'types',
                indexName: 'type_reminder_id'
            );
    
            $table->decimal('reminder_amount')->nullable(); 
            $table->date('start_date');

            $table->timestamps(); 
            $table->foreignId('frequency_id')->constrained(
                table: 'frequencies',
                indexName: 'frequency_reminder_id'
            );
    
            $table->json('frequency_details')->nullable();
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
