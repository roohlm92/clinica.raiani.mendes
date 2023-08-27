<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    // Define o nome da tabela no banco de dados (se não seguir a convenção padrão)
    protected $table = 'procedures';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'value', // Adicione o campo 'value' aqui
    ];
    

    // Relacionamento Eloquent com outras tabelas, por exemplo, um relacionamento com médicos
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_procedures', 'procedure_id', 'doctor_id');
    }

    // Outros métodos relacionados a procedimentos, validações, etc.
}
