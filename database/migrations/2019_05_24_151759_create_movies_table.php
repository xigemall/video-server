<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * 电影
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',50)->comment('电影名称')->unique()->default('');
            $table->string('img')->comment('图片')->default('');
            $table->unsignedInteger('type_id')->comment('类型')->index();
            $table->unsignedInteger('region_id')->comment('地区')->index();
            $table->char('year',10)->comment('年份')->default('')->index();
            $table->string('source')->comment('资源')->default('');
            $table->unsignedInteger('view_num')->default(0)->comment('播放量')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
