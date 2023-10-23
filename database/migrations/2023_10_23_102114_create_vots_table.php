<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vots', function (Blueprint $table) {
            $table->id();
            //$table->string('category');
            //$table->string('account_vot');
            $table->string('account_code');
            $table->foreignId('sequence_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vots');
    }
};
