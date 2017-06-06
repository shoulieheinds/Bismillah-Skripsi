<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users()
  {
      return $this->hasMany(User::class);
      
  }
}
