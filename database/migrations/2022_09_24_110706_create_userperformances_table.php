<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserperformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userperformances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->date('date')->nullable();
            $table->string('weekday')->nullable();
            $table->time('Presence')->nullable();
            $table->time('AllowedOvertime')->nullable();
            $table->time('UnauthorizedOvertime')->nullable();
            $table->time('lowTimeWork')->nullable();
            $table->time('Leave')->nullable();
            $table->time('Mission')->nullable();
            $table->time('TheFirstEvent')->nullable();
            $table->time('TheLastEvent')->nullable();
            $table->string('workgroup')->nullable();
            $table->string('Shifts')->nullable();
            $table->string('Descriptions')->nullable();
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
        Schema::dropIfExists('userperformances');
    }
}
