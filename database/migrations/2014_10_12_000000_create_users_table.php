<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer
            $table->string('name'); //Varchar 255
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable(); //Para verificación de correo. Al principio puede ser nulo.
            $table->string('password');
            $table->rememberToken();    //Para mantener sesion del usuario.
            $table->timestamps();       //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
