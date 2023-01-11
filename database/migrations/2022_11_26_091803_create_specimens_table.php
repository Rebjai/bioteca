<?php

use App\Models\Catalogs\BioSpecies;
use App\Models\Location\Location;
use App\Models\User;
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
            'specimens',
            function (Blueprint $table) {
                $table->id();
                $table->date('collection_date');
                $table->foreignIdFor(User::class, 'creator_id');
                $table->foreignIdFor(User::class, 'modified_by_id')->nullable();
                $table->foreignIdFor(BioSpecies::class, 'species_id');
                $table->foreignIdFor(Location::class);
                $table->string('locality');
                $table->double('latitude');
                $table->double('longitude');
                $table->double('altitude');
                $table->integer('collector_number');
                $table->integer('assistant_number');
                $table->integer('measurable_id')->nullable();
                $table->string('measurable_type')->nullable();
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
        Schema::dropIfExists('specimens');
    }
};
