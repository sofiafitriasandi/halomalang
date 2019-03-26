<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Berita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function(Blueprint $table) {
				$table->Increments('id_berita') ->unique;
				$table->string('name');
				$table->date('tanggal');
				$table->string('penulis');
				$table->text('isi');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfexist('berita');
    }
}
