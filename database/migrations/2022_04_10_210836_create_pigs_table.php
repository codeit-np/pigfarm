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
        Schema::create('pigs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('breed_id')->nullable();
            $table->string('name');
            $table->string('tag_no');
            $table->string('litter_no');
            $table->string('weight');
            $table->enum('gender',['male','female']);
            $table->date('dob')->nullable();
            $table->date('date_of_entry_on_farm')->nullable();
            $table->foreignId('pig_group_id')->nullable();
            $table->enum('pig_obtain_by',['Born on farm','Purchased','Other']);
            $table->string('if_other')->nullable();
            $table->string('mother_tag_no')->nullable();
            $table->string('father_tag_no')->nullable();
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('pigs');
    }
};
