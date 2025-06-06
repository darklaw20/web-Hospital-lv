<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    use HasFactory;
    protected $fillable = ['nombre','apellidos','telefono','licencia_medica','especialidad','user_id'];

    public function consultorio(){
        return $this->belongsTo(Consultorio::class);
    }
    public function horarios(){
        return $this->hasMany(Horario::class,"doctor_id");
    }
    public function user(){
        return $this->belongsTo(User::class);

    }

}
