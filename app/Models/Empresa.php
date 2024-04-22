<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "empresas";
    protected $primaryKey = 'id_empresa';
    protected $fillable=['nombre','sector','NIF','fecha_inicio_operaciones','situacion_fiscal','domicilio'];
}
