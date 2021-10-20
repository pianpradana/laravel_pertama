<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Controllers\ArticleController;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullName(){
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFirstNameOrUsername(){
        
        if(!$this->first_name) {
            return $this->username;
        } 

        return $this->first_name;
    }


    public function scopeActive($query){
        return $query->where('activated', true);
    }

    public function scopeAgeGreaterThan($query, $age){
        return $query->where('age', '>=', $age);
    }

    // public function getRouteKeyName(){

    //     return 'username';
    // }

}
