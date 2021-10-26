<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-26 21:30:06
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 21:44:42
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_infos', function (Blueprint $table) {
            $table->renameColumn('divition','division');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
