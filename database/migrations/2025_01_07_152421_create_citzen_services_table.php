<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('citzen_services', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->text('conditions')->nullable();
            $table->boolean('active')->default(true);
            $table->date('url_active_from_date')->nullable();
            $table->date('url_active_to_date')->nullable();
            $table->date('active_from_date')->nullable();
            $table->date('active_to_date')->nullable();
            $table->string('url')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->string('Responsible')->nullable();
            $table->json('logo1')->nullable();
            $table->json('logo2')->nullable();
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('citzen_services');
    }
};
