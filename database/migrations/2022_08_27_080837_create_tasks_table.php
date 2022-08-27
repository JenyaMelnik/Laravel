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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamp('setting_date')->useCurrent();
            $table->timestamp('deadline');
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->string('author');
            $table->text('description');
            $table->enum('priority', ['high', 'medium', 'low']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
