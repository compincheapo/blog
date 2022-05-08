<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Modificar una tabla existente, agregando campos. 

    public function up()
    {
        Schema::table('users', function (Blueprint $table) { 
            $table->string('avatar')->nullable()->after('email'); //Añade luego del campo email.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //Acción del rollback.

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
