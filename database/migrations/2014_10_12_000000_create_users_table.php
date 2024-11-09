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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('password');
            $table->enum('estado', ['activo','inactivo'])->default('activo');
            $table->string('token');
            $table->string('verificacion');
            $table->enum('rol', ['1', '2', '3']);
            //->default('3')
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
