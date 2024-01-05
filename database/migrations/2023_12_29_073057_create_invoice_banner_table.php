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
        Schema::create('invoice_banner', function (Blueprint $table) {
            $table->id();
            $table->string('compani_name');
            $table->integer('price');
            $table->timestamp('date_start');
            $table->timestamp('date_end')->nullable();
            $table->tinyInteger('status')->comment('0 => unActive  , 1 => active ');
            $table->tinyInteger('status_paid')->comment('0 => unPaid  , 1 => Paid ');
            $table->text('url');
            $table->foreignId('banner_id')->constrained('banners')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_banner');
    }
};
