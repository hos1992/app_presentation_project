<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_section_attachments', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('section_id');
            $table->string('url');
            $table->string('type')->default('IMAGE');
            $table->timestamps();


            $table->foreign('section_id')
                ->references('id')
                ->on('page_sections')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_section_attachments');
    }
}
