<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Menu extends Model
{
    use HasFactory;

    public static function principal() {

        $paginas = DB::table('pagina')->select('*')->get();
        $data['paginas'] = $paginas;

        return View::make('includes.menu', $data);

    }
}
