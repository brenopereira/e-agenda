<?php

namespace App\Domains\Schedules\Database\Migrations;

use App\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $this->schema->create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schedule');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $this->schema->drop('schedules');
    }
}
