<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('commentable_id');
            $table->string('commentable_type');
            $table->integer('post_id')->unsigned();
            $table->string('date');
            $table->string('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('comments');
    }
};
