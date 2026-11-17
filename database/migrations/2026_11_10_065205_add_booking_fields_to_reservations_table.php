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
        Schema::table('reservation', function (Blueprint $table) {
            $table->string('guest_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('room_name')->nullable();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->unsignedSmallInteger('guest_count')->default(1);
            $table->text('notes')->nullable();
            $table->string('status')->default('pending')->index();
            $table->index(['check_in', 'check_out']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['check_in', 'check_out']);
            $table->dropColumn([
                'guest_name',
                'contact',
                'room_name',
                'check_in',
                'check_out',
                'guest_count',
                'notes',
                'status',
            ]);
        });
    }
};
