<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function signos_vitales()
    {
        return $this->hasMany('App\Models\signos_vitales');
    }

    public function paciente()
    {
        return $this->hasMany('App\Models\paciente');
    }

    public function diagnosticos()
    {
        return $this->hasMany('App\Models\diagnostico');
    }

    



}
