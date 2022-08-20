<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signos_vitales extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'temperatura', 'pulso', 'ritmo_respiratorio', 'id_users'];

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\users');
    }
    
}
