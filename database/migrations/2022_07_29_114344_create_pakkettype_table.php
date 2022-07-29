<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePakkettypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakkettype', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->unsignedBigInteger("afdeling_id");

            $table->string('pakkettype')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 
        Schema::dropIfExists('pakkettype');
    }
}
