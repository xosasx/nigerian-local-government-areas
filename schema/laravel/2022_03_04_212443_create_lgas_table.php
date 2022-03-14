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
        Schema::create('lgas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('state_id')->unsigned();
            /**
             * The below can be uncommented and the above removed 
             * if a countries table exists which can be mapped to
             * the state_id field.
             */
            // $table
            //     ->foreignId('state_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->string('state_code');
            $table->string('state_name');
            $table->integer('country_id')->unsigned();
            /**
             * The below can be uncommented and the above removed 
             * if a countries table exists which can be mapped to
             * the country_id field.
             */
            // $table
            //     ->foreignId('country_id')
            //     ->constrained()
            //     ->cascadeOnDelete();
            $table->string('country_code');
            $table->string('country_name');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->string('wikiDataId')->nullable();
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
        Schema::dropIfExists('lgas');
    }
};
