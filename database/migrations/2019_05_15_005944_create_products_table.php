<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('productName',100);
            $table->tinyInteger('catagoryId');
            $table->float('price',10,2);
            $table->integer('qty');
            $table->integer('qtyneed');
            $table->integer('qtyreceived');
            $table->text('shortDescription');
            $table->text('longDescription');
            $table->string('images',200);
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
        Schema::dropIfExists('products');
    }
}
