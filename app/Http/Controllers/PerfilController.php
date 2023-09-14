<?php

namespace App\Http\Controllers;

use App\Models\Headers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Componentes;
use App\Models\HTMLhelp;
use App\Models\Conteudo;
use Illuminate\Support\Facades\Storage;
use App\Models\Login;

class PerfilController extends Controller
{
    public function minhaconta($get = null, Request $request){
        Login::sessionDomain();

        $codusu = Session::get('codusu');

        if($request->method() == 'POST'){

            $nome = ($request->get('nome'))? $request->get('nome') : Session::get('nome');
            $email = ($request->get('email'))? $request->get('email') : Session::get('email');

            $data = [
                'nome' => $nome,
                'email' => $email
            ];

            if($request->get('csenha') != '') {
                $data['senha'] = md5(base64_encode($request->get('csenha')));
            }

            DB::table('usuarios')->where('codusu', '=', $codusu)->update($data);

            return redirect()->to('/perfil/minhaconta/atualizado/')->send();

        }

        $row = DB::table('usuarios')->select('*')
            ->where('codusu', '=', $codusu)
            ->first();

        $url = 'https://noticiasdofront.nyc3.digitaloceanspaces.com/uploads/perfil/';

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['retorno'] = Componentes::getErro($get, 'Conta');
        $data['imaegm'] = $url.$row->imagem;

        return View::make('perfil.perfil', $data);

    }

    public function upload(Request $request){
        Login::sessionDomain();

        $codusu = Session::get('codusu');

        if($request->hasFile('imagem')){

            $file = $request->file('imagem');
            $extimg = $file->getClientOriginalExtension();

            // Retorna o nome original do arquivo
            $imagem = md5($file->getClientOriginalName().time()).".".$extimg;
            $filePath = 'uploads/perfil/'. $imagem;

            Storage::disk('digitalocean')->put($filePath, file_get_contents($file), 'public');

            $data = [
                'imagem' => $imagem
             ];

            DB::table('usuarios')->where('codusu', '=', $codusu)
                ->update($data);

            return redirect()->to('/perfil')->send();

        }else{
            return redirect()->to('/perfil')->send();
        }

    }
}
