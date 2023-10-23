<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('sequences', function (Blueprint $table) {
            $table->id();
            $table->integer('sequence');
            $table->string('category');
            $table->string('account_vot');
            //$table->foreignId('vot_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sequences');
    }
};
