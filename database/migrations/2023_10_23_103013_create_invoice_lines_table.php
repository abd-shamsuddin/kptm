<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('invoice_lines', function (Blueprint $table) {
            $table->id();
            //$table->string('invoice_no');
            $table->foreignId('invoice_id')->constrained();
            //$table->string('account_code');
            $table->foreignId('vot_id')->constrained();
            $table->decimal('charge');
            $table->decimal('credit');
            $table->boolean('paid');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice_lines');
    }
};
