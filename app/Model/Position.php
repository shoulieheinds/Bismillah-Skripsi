<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
   protected $fillable = [
        'name',
    ];

    public function user()
  {
      return $this->hasMany(User::class);
  }
}
