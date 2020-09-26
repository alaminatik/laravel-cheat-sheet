<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyCategoryColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            // $table->foreignId('post_id')->constrained('posts');
            $table->unsignedBigInteger('post_id')->after('id');

            $table->foreign('post_id')->references('id')->on('posts');
            // $table->dropForeign(['post_id']);
            // $table->dropColumn(['post_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            //
        });
    }
}
