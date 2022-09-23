<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("articles", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table
                ->foreignId("author_id")
                ->nullable()
                ->constrained("users")
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->text("content");
            $table
                ->decimal("price", 10, 2)
                ->default("0")
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("article");
    }
}
