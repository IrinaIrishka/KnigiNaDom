<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'surname',
        'name',
        'address',
        'email',
        'login',
        'password',
        'remember_token'
    ];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at', 
        'updated_at'
    ];
 
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
   /*  protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */

    protected $guarded = [];
    
    //protected $table = 'users';

    /* public function isAdmin()
    {
        return $this->admin === 1;
    } */

    //protected $with = ['book'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    } 

    public function addNewOne($data)
    {
        User::create($data);
        return redirect('/')->with('success', 'Your account has been created.');;
    
    }
}
