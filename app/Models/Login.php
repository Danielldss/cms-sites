<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Login extends Model
{
    use HasFactory;

    public static function sessionDomain() {
        if(Session::get('logado')) {
            return true;
        } else {
            if ($_SERVER['REQUEST_URI'] != '/login') {
                Session::flush();
                return redirect()->to('/login')->send();
            }else {
                return true;
            }
        }
    }

}
