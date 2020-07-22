<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgainmessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('againmessages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_name',100);
            $table->string('sender_email',200);
            $table->longText('sender_message',300);
            $table->integer('message_status')->default(1);
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('againmessages');
    }
}
