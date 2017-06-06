<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'pob',
            'dob',
        		'gender_id',
        		'religion_id',
        		'segmentation_id',
        		'card_id',
        		'card_numb',
        		'position_id',
        		'address',
        		'telp_numb',
        		'photo',
        		'email',
        		'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function research()
  {
    return $this->hasMany(Research::class);
  }
   public function gender()
  {
    return $this->belongsTo('App\Model\Gender');
  }
    public function religion()
  {
    return $this->belongsTo(Religion::class);
  }
    public function card()
  {
    return $this->belongsTo(Card::class);
  }
    public function segmentation()
  {
    return $this->belongsTo(Segmenatation::class);
  }
    public function position()
  {
    return $this->belongsTo(Position::class);
  }
}