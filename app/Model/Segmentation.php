<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Segmentation extends Model
{
  protected $fillable = [
        'name',
    ];

    public function users()
  {
      return $this->hasMany(User::class);
  }
}
