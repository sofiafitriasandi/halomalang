<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
	public $timestamps = false;
	protected $table = 'berita';
	protected $primaryKey = 'id_berita';
	
    protected $fillable = ['name','tanggal','penulis','isi'];
	
    public function kategori()
	{
	return $this->belongsToMany(kategori::class);
	}
}
