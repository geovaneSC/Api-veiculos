<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Carro extends Model{
    protected $fillable = [
        'id',
        'fabricante',
        'modelo',
        'veiculo',
        'updated_at',
        'created_at'
    ];
}



?>