<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTableCustomUserRememberToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('custom_user', function (Blueprint $table) {
            $table->renameColumn('remeber_token', 'remember_token')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custom_user', function(Blueprint $table)
        {
            $table->renameColumn('remember_token', 'remeber_token')->nullable()->change();

        });
    }
}
