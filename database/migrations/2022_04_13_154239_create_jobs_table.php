<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('contract');//is correct or not cdi or cdd
            $table->json('tags');//technologies & outils
            $table->boolean('isRemote');
            $table->string('contractType');// stage or travial
            $table->text('description');
            $table->text('responsibilities');
            $table->foreignId('authorId')->constrained('recruiters');
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
        Schema::dropIfExists('jobs');
    }
};
