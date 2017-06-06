<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rescstat extends Model
{
	protected $table ='rescstats';

    protected $fillable = [
        'name',
    ];
   
   public function research()
  {
      return $this->hasMany(Research::class);
  }

}
