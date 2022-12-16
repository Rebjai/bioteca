<?php

use App\Models\Catalogs\Collector;
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
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname');
            // $table->foreignIdFor(User::class);
            $table->timestamps();
        });
        Schema::table(
            'specimens',
            function (Blueprint $table) {
                $table->foreignIdFor(Collector::class)->constrained();
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
        Schema::table(
            'specimens',
            function (Blueprint $table) {
                $table->dropForeignIdFor(Collector::class);
            }
        );
        Schema::dropIfExists('collectors');
        
    }
};
