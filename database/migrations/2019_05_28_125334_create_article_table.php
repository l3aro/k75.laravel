<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key + auto increment + unsigned big integer
            $table->string('title')->nullable();
            $table->string('author', 20)->nullable();
            $table->text('content')->nullable();
            $table->string('avatar')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            // title varchar 
            // author varchar 20
            // content text
            // avatar varchar
            // meta_keyword varchar
            // category_id big integer unsigned
            // description varchar
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
