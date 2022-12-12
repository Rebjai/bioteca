<?php

use App\Models\Assistant;
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
            'assistants',
            function (Blueprint $table) {
                $table->id();
                // $table->string('name');
                $table->foreignIdFor(User::class);
                $table->timestamps();
            }
        );
        Schema::table(
            'users',
            function (Blueprint $table) {
                $table->integer('role')->nullable()->default(0);
            }
        );
        Schema::table(
            'specimens',
            function (Blueprint $table) {
                $table->foreignIdFor(Assistant::class)->constrained();
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
                $table->dropForeignIdFor(Assistant::class);
            }
        );
        Schema::dropIfExists('assistants');
        Schema::dropColumns('users', ['role']);
        
    }
};
