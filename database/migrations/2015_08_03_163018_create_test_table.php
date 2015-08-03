<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->createTest();
        $this->renameTest();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('test', 'tests');
        Schema::dropIfExists('tests');
        // Schema::drop('tests');
    }

    /**
     * Создаю таблицу tests
     */
    private function createTest()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email', 100)->nullable();
            $table->tinyInteger('age')->unsigned();
            $table->char('code');

            $table->timestamps();
        });
    }

    /**
     * С дуру её переименовал
     */
    private function renameTest()
    {
        Schema::rename('tests', 'test');
    }
}
