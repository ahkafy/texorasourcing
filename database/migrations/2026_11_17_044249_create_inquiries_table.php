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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('inquiry_type')->default('rfq'); // rfq, visit, sample, general
            $table->string('product_category')->nullable();
            $table->string('target_quantity')->nullable();
            $table->string('target_delivery_date')->nullable();
            $table->string('payment_terms')->nullable();
            $table->text('message');
            $table->string('ip_address')->nullable();
            $table->string('status')->default('new'); // new, in_progress, replied, closed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
