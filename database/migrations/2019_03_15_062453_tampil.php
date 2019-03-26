<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tampil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('tampil', function (Blueprint $table) {
			$table -> bigIncrements ('id_tampilan') -> unique;
			$table -> string ('nama_tampil');
			$table -> integer ('id_berita') -> unsigned ();
			$table -> foreign ('id_berita') -> references ('id_berita') ->on ('berita') -> onDelete('cascade');
			$table -> integer ('id_kategori') ->unsigned();
		$table -> foreign ('id_kategori') -> references ('id_kategori') ->on ('kategori') -> onDelete('cascade'); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: dropIfExist('tampil');
    }
}
