<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Avatar;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->timestamps();
        });

        for($i = 1; $i <= 15; $i++){
            Avatar::create([
                'url' => asset("helios/images/pic" . str_pad($i, 2, '0', STR_PAD_LEFT) . ".jpg"),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatar');
    }
}
