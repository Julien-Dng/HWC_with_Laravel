<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function($table) {
            $table->integer('Ateam_goals');
            $table->integer('Bteam_goals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function($table) {
            $table->dropColumn('Ateam_goals');
            $table->dropColumn('Bteam_goals');
        });
    }
}
