<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user()
  {
      return $this->hasMany(User::class);
  }
}
