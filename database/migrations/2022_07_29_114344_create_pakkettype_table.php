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
            
            // $table->unsignedBigInteger("afdeling_id");
            // $table->foreign("afdeling_id");->references("id")->on("afdelingen")->onDelete("cascade");

            $table->string("afdeling");

            $table->foreign("afdeling")->references("name")->on("afdelingen")->onDelete("cascade");

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
        Schema::table('pakkettype', function (Blueprint $table){
            $table->dropForeign('pakkettype_afdeling_foreign');
        });
 
        Schema::dropIfExists('pakkettype');
    }
}
