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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->tinyText('name');
            $table->tinyText('slug');
            $table->tinyText('social_name'); // ownwer
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->string('phone');
            $table->tinyText('address')->nullable();
            $table->tinyText('town')->nullable();
            $table->tinyText('state')->nullable();
            $table->boolean('is_open')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('auto_open')->nullable(); //true to use opens_at and closes_at
            $table->time('opens_at')->nullable();
            $table->time('closes_at')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
