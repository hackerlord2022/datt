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
        Schema::create('resubmit', function (Blueprint $table) {
            $table->id();
            $table->integer('resubmitCode');
            $table->string('status');
            $table->text('content');
            $table->string('classCode');
            $table->string('userCode');
            $table->rememberToken();
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
            Schema::dropIfExists('resubmit');
    }
};
