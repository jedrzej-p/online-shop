<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('doc_number', 13);
            $table->decimal('value', 7, 2, true);
            $table->unsignedSmallInteger('amount');
            $table->boolean('is_paid');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('transport_id')->constrained('transports');
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
        Schema::dropIfExists('orders');
    }
}
