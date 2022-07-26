<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("habitacion", function (Blueprint $table) {
            $table->id();
            $table->integer("numero_habitacion")->unique();
            $table->integer("piso");
            // 0 libre - 1 ocupado - 2 pendiente de mantenimiento
            $table->float("precio");
            $table->integer("estado")->default(0);
            //status 0 desactivo 1 activo
            $table->integer("status")->default(1);
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
        Schema::dropIfExists("habitacion");
    }
};
