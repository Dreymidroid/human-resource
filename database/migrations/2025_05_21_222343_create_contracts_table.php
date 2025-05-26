<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignid('employee_id')->constrained()->ondelete('cascade');
            $table->foreignid('designation_id')->constrained()->ondelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('rate_type', ['daily', 'monthly']);
            $table->decimal('rate', 10, 2);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
