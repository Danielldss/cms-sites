<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSend extends Model
{
    use HasFactory;

    protected $table = 'listaemail';
    protected $fillable = [
        'nome', 'email', 'type', 'value', 'enviado', 'assunto'
    ];
}
