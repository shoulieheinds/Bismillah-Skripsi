<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
   protected $fillable =[
				'name',
  		 				];

  public function researchs()
  {
      return $this-> belongsTo('Research');
  }
}