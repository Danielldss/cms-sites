<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;
    protected $primaryKey = 'codconteudo';
    protected $table = 'conteudo';
    protected $fillable = [
        'codconteudo', 'codcategoria', 'codsubcategoria', 'codpagina', 'slug', 'titulo', 'subtitulo',
        'texto', 'dtcadastro', 'title', 'description', 'listorder'
    ];

    public function imagem() {
        return $this->hasOne(Imagens::class, 'codconteudo', 'codconteudo');
    }

}
