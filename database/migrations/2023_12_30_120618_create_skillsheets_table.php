<?php

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
        Schema::create('skillsheets', function (Blueprint $table) {
            $table->string('id', 12)->comment('00000CCNNNNN。C：カテゴリ、N：通し番号。0は予約');
            $table->string('name', 100)->comment('案件の概要');
            $table->date('start_date')->comment('開始時期');
            $table->date('end_date')->comment('終了時期');
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
        Schema::dropIfExists('skillsheets');
    }
};