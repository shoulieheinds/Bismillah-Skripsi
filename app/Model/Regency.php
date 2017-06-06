<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
	protected $table ='regencys';
	
    protected $fillable = [
        'name',
    ];

    public function research()
  {
      return $this->belongsTo(Research::class);
  }
}
