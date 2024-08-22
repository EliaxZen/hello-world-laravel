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
        Schema::table('products', function (Blueprint $table) {
            $table->integer('min_quantity') //Noma da coluna
            ->default(1) //Valor default
            ->after('quantity'); //Onde ela vai ficar no banco de dados.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Faz a exclusão dessa coluna
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('min_quantity');
        });
    }
};
