<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('role_id')->default(0)->comment('0:一般会員 1:クリエイター 2:管理者');
                $table->string('name');
                $table->string('creator_name')->nullable();
                $table->string('email');
                $table->string('password');
                $table->string('tel');
                $table->date('birthday');
                $table->string('sex')->comment('男性, 女性, どちらでもない');
                $table->string('post_code')->nullable();
                $table->integer('prefecture_id');
                $table->string('address');
                $table->string('building')->nullable();
                $table->text('icon_image_path')->nullable();
                $table->text('profile')->nullable();
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
        Schema::dropIfExists('users');
    }
}
