<?php

use App\Models\Collection\Specimen;
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
        Schema::create('birds', function (Blueprint $table) {
            $table->id();
            $table->boolean('gender')->nullable();
            // $table->float('gonads')->nullable();
            $table->float('lt')->nullable();
            $table->float('cv')->nullable();
            $table->float('wingspan')->nullable();
            $table->float('weight')->nullable();
            $table->string('observations')->nullable();
            $table->foreignIdFor(Specimen::class)->nullable();
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
        Schema::dropIfExists('birds');
    }
};
