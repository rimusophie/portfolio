<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsheetSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillsheet_skill', function (Blueprint $table) {
            $table->string('skillsheet_id', 12)->comment('skillsheetsテーブルのid');
            $table->string('skill_id', 12)->comment('skillsテーブルのid');
            $table->timestamp('created_at')->useCurrent()->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->useCurrent()->nullable()->comment('更新日時');

            $table->foreign('skillsheet_id')->references('id')->on('skillsheets')->onDelete('cascade')->onUpdate('cascade');    // 外部キー
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade')->onUpdate('cascade');    // 外部キー

            $table->primary(['skillsheet_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skillsheet_skill');
    }
}
