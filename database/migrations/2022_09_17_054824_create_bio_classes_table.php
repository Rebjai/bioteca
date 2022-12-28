<?php

use App\Models\Catalogs\BioPhylum;
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
            'bio_classes',
            function (Blueprint $table) {
                $table->id()->startingValue(12);
                $table->string('scientific_name');
                $table->string('common_name', 400);
                $table->string('status');
                $table->foreignIdFor(BioPhylum::class);
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
        Schema::dropIfExists('bio_classes');
    }
};
