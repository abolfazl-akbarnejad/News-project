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
        Schema::create('banner_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('compani_name')->nullable();
            $table->integer('price')->nullable();
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 => unActive  , 1 => active ');
            $table->tinyInteger('status_paid')->nullable()->comment('0 => unPaid  , 1 => Paid ');
            $table->text('url')->nullable();
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
