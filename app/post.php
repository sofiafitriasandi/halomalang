<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
	'user_id','title','body'
	];
	public function user ()
	{
		return $this-> belongsTo(berita::class);
	}
	public function categories()
	{
		return $this->belongsToMany(kategori::class);
	}		 
}
