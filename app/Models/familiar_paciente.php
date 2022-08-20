<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familiar_paciente extends Model
{
    use HasFactory;
    protected $fillable = ['id_paciente', 'id_familiar'];

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente');
    }

   






}


// Path: app\Models\familiar_paciente.php
// Compare this snippet from database\migrations\2022_08_20_022810_create_user_signos_table.php:
// <?php

//

