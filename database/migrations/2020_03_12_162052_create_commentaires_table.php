<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('commentaire');
            $table->integer('note_total')->default(0);
            $table->integer('id_user_comment')
                    ->foreign()
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('id_topic_comment')
                    ->foreign()
                    ->references('id')
                    ->on('topics')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->boolean('vue')->default(false);
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
        Schema::dropIfExists('commentaires');
    }
}
