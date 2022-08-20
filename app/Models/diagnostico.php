<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnostico extends Model
{

    use HasFactory;
    protected $fillable = ['d_inicial', 'd_final', 'observaciones', 'id_paciente', 'id_users'];

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\users');
    }
    

}
