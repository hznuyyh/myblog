<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
	protected $table = 'tags';
	protected $fillable=[
		'tag','title','subtitle','page_image','meta_description','layout','reverse_directions'
	];
}
