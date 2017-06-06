<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reqstat extends Model
{
	protected $table ='reqstats';

    protected $fillable = [
        'name',
    ];

    public function research()
    {
		return $this->hasMany(Research::class);
    }
}
