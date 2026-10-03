<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category_key')->default('outdoor');
            $table->string('category')->nullable();
            $table->string('spec_badge')->nullable();
            $table->text('features')->nullable();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category_key')->default('theme');
            $table->string('location')->nullable();
            $table->string('year', 4)->nullable();
            $table->string('capacity')->nullable();
            $table->text('scope')->nullable();
            $table->text('specifications')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('products', fn (Blueprint $table) => $table->dropColumn(['category_key', 'category', 'spec_badge', 'features']));
        Schema::table('projects', fn (Blueprint $table) => $table->dropColumn(['category_key', 'location', 'year', 'capacity', 'scope', 'specifications', 'sort_order', 'status']));
    }
};
