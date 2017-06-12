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
     *
     */
    protected $table = 'users';

    protected $fillable = [
      
        'name',
        'prenom',
        'email',
        'password',
        'photo',
        'pays',
        'api_token',
        'created_at',
        'updated_at'
        
    ];

   /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getId()
    {
        return $this->id;
    }
    /**
     * Method to return the email for password reset
     *
     * @return string Returns the User Email Address
     */
    public function getEmailForPasswordReset() {
        return $this->email;
    }
}
