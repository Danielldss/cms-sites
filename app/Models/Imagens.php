<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;
    protected $primaryKey = 'codimage';
    protected $table = 'imagens';
    protected $fillable = [
        'codconteudo', 'imagem', 'url', 'diretorio', 'title', 'listorder', 'tipo'
    ];

}
