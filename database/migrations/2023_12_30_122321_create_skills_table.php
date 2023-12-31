<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->string('id', 12)->comment('000000CCNNNN。C：カテゴリ、N：通し番号。0は予約');
            $table->string('name', 100)->comment('スキル名称');
            $table->timestamp('created_at')->useCurrent()->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->useCurrent()->nullable()->comment('更新日時');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
