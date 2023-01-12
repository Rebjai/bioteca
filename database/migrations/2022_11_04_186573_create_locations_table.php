<?php

use App\Models\Location\Municipality;
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
            'locations',
            function (Blueprint $table) {
                $table->id()->startingValue(277331);
                $table->string('name');
                $table->string('zip_code')->nullable();
                $table->double('latitude');
                $table->double('longitude');
                $table->double('altitude');
                $table->foreignIdFor(Municipality::class);
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
        Schema::dropIfExists('locations');
    }
};
