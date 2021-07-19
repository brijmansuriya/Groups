<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_group', function (Blueprint $table) {
            $table->id();
            $table->string('gname')->nullable();
            $table->text('url')->nullable();
            $table->string('gimg',250)->nullable();
            $table->Integer('cat_id')->nullable();
            $table->Integer('type')->nullable();
            $table->Integer('gctype')->nullable();
            $table->string('gmail')->nullable();
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
        Schema::dropIfExists('tbl_group');
    }
}
