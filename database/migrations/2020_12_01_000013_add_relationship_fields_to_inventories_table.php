<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipFieldsToInventoriesTable extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_fk_2702448')->references('id')->on('products');
        });
    }
}
