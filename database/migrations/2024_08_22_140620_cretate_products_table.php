<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            //Id do registro, autoincrement e primary-key
            $table->bigIncrements('id');

            //Nome do produto (name) - string
            $table->string('name');

            //Código do produto (code) - string - não pode repetir
            $table->string('code')->unique();
            
            //Quantidade do produto - () - int - por default quantidade = 0\
            $table->integer('quantity')->default(0);

            //Observações sobre o produto - text - pode ser null
            $table->text('obs')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
