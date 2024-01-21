<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('unit', 50)->nullable(true);
            $table->string('purpose', 50)->nullable(true);
            $table->string('point', 50)->nullable(true);
            $table->string('body', 200);
            $table->string('image_url')->nullable(true);
            $table->string('reference', 50)->nullable(true);
            $table->string('memo', 200)->nullable(true);
            $table->string('test', 200)->nullable(true);
            $table->string('solution', 200)->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
