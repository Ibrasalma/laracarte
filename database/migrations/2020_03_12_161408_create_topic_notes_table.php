<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('note', [0, 1,2,3,4,5]);
            $table->integer('id_topic')
                    ->foreign()
                    ->references('id')
                    ->on('topics')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('id_user_noteur')
                    ->foreign()
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_notes');
    }
}
