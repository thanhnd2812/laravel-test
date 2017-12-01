<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('id');
            $table->string('address')->unique();
            $table->integer('price')->default(0);
            $table->float('bedroom', 4, 1)->default(0);
            $table->float('badroom', 4, 1)->dafault(0);
            $table->string('type');
            $table->string('neighborhood');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
