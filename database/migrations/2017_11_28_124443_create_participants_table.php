<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string("nama")->nullable();
            $table->string("nip")->nullable();
            $table->string("golongan")->nullable();
            $table->string("jabatan")->nullable();

            $table->integer("letter_id")->unsigned();
            $table->foreign("letter_id")->references("id")->on("letters");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
