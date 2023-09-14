<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return View::make('login');
    }

    public function login(Request $request) {
        try {

            $usuario = $request->get('usuario');
            $senha   = md5(base64_encode($request->get('senha')));

            $qry = DB::table('usuarios')
                ->select('*')
                ->where('email', '=', $usuario)
                ->where('senha', '=', $senha)
                ->count();

            if($qry != 0) {

                $row = DB::table('usuarios')
                    ->select('*')
                    ->where('email', '=', $usuario)
                    ->where('senha', '=', $senha)
                    ->first();

                $codusu 	= $row->codusu;
                $nome 		= $row->nome;
                $email 		= $row->email;
                $acesso 	= $row->acesso;
                $imagem		= $row->imagem;

                Session::put('codusu', $codusu);
                Session::put('nome', $nome);
                Session::put('email', $email);
                Session::put('acesso', $acesso);
                Session::put('imagem', $imagem);
                Session::put('logado', 1);

                return redirect()->to('/painel')->send();

            } else {
                return redirect()->to('/login')->send();
            }


        } catch (e $e) {
            report($e);
            return false;
        }
    }

    public function logoff(){
        Session::flush();
        return redirect()->to('/login')->send();
    }

}
