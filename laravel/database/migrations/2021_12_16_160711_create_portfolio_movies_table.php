<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('portfolio_movies')) {
            Schema::create('portfolio_movies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('portfolio_id');
                $table->string('title')->nullable();
                $table->text('url');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_movies');
    }
}
