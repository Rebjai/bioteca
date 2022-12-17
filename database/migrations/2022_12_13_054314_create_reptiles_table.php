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
        Schema::create(
            'reptiles',
            function (Blueprint $table) {
                $table->id();
                $table->boolean('gender')->nullable();
                $table->smallInteger('age')->nullable();
                $table->float('gonads')->nullable();
                $table->float('total_length')->nullable();
                $table->float('tail_length')->nullable();
                $table->float('snout_vent_length')->nullable();
                $table->float('weight')->nullable();
                $table->boolean('skull')->nullable();
                $table->boolean('skin')->nullable();
                $table->boolean('body')->nullable();
                $table->string('observations')->nullable();
                $table->foreignIdFor(Specimen::class)->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reptiles');
    }
};
