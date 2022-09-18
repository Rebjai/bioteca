<?php

use App\Models\Catalogs\BioClass;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_orders', function (Blueprint $table) {
            $table->id();
            $table->string('scientific_name');
            $table->string('common_name', 400);
            $table->string('status');
            $table->foreignIdFor(BioClass::class);
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
        Schema::dropIfExists('bio_orders');
    }
};
