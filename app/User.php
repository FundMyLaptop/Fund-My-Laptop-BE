<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use App\Notifications\PasswordResetNotification;
use App\Notifications\EmailVerificationNotification;

use Laravel\Passport\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = [
        'blocked_until'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'isBlocked'=>'integer',
    ];

    //Password Reset Notification
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token));
    }

    //Email Verification Notification
    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerificationNotification); // my notification
    }

    public function request()
    {
        return $this->hasMany('App\Request');
    }

    public function favorite()
    {
        return $this->hasMany('App\Favorite');
    }

    public function recommendation()
    {
        return $this->hasMany('App\Recommendation');
    }

    public function bank_account()
    {
        return $this->hasOne('App\BankAccount');
    }

    public function verification()
    {
        return $this->hasOne('App\Verification');
    }
    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

    public function testimonial()
    {
        return $this->hasMany('App\Testimonial');
    }
    public function socialAccount()
    {
        return $this->hasMany('App\SocialAccount');
    }

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }
}
