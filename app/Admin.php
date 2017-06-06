<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;

 /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token)); //this use for notification in reset password by email --shouhax 
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $guard ='admin';

    protected $fillable = [
        'name','email','job_title','photo','password',
    ];

    
    protected $hidden =[
        'password','remember_token',
    ];
}
