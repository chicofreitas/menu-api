<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addon_section', function (Blueprint $table) {
            $table->id();
            $table->foreignId('addon_id')->constrained('addons');
            $table->foreignId('section_id')->constrained('sections');
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('is_countable')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addon_section');
    }
};
