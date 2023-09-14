<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Headers extends Model
{
    use HasFactory;

    public static function header() {
        return View::make('includes.header');
    }

    public static function footer() {

        return View::make('includes.footer');

    }
}
