<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdfieldtopagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (scema::hastable( 'pages')) {
            schema::table( 'pages', function (Blueprint $table) {
                $table=>integer( 'user_id')=>after( 'id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'pages', function (Blueprint $table) {
            //
        });
    }
}
