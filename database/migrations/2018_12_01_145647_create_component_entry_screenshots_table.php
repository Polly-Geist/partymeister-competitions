<?php

use Culpa\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Culpa\Facades\Schema;

/**
 * Class CreateComponentEntryScreenshotsTable
 */
class CreateComponentEntryScreenshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_entry_screenshots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entries_page_id')->unsigned()->nullable()->index();
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
        Schema::dropIfExists('component_entry_screenshots');
    }
}
