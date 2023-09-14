<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use App\Models\Headers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Login;

class PainelController extends Controller
{

    public function index() {
        Login::sessionDomain();

        $qrylog = DB::table('logs')->select('*')->orderBy('codlog', 'desc')->limit(50)->get();

        $down = DB::table('arquivos')->selectRaw("SUM(downloads) as totaldown")->first();

        $emails = DB::table('listaemail')->count();

        $acessos = DB::table('relacessos')->count();

        $dataatual = date('Y-m-d');
        $visitas = DB::table('relacessos')->whereBetween('dtacadastro', [$dataatual." 00:00:00", $dataatual." 23:59:59"])->count();

        $data['logs'] = $qrylog;
        $data['downloads'] = ($down->totaldown != '')? $down->totaldown : '0';
        $data['emails'] = $emails;
        $data['acessos'] = $acessos;
        $data['visitas'] = $visitas;
        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        return View::make('painel', $data);
    }

    public function seo($get = null, Request $request){
        Login::sessionDomain();
        if($request->method() == 'POST'){

            $data = [
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'title' => $request->get('title'),
            ];

            if($request->hasFile('imagem')){
                $file = $request->file('imagem');
                $extimg = $file->getClientOriginalExtension();
                // Retorna o nome original do arquivo
                $favicon = md5($file->getClientOriginalName().time()).".".$extimg;
                $file->storeAs('uploads/favicon', $favicon, 'public');
                $url = '//'.$_SERVER['HTTP_HOST'].'/storage/uploads/favicon/';
                $favicon = $url.$favicon;

                $data['favicon'] = $favicon;
            }else{
                $data['favicon'] = null;
            }

            $qry = DB::table('metatags')->select('*')->count();

            if($qry > 0){
                DB::table('metatags')->update($data);
            }else{
                DB::table('metatags')->insert($data);
            }

            return redirect()->to('painel/seo/atualizado/')->send();

        }


        $row = DB::table('metatags')->first();

        $data['retorno'] = Componentes::getErro($get, 'Meta Tags');
        $data['title'] = (isset($row->title))? $row->title : '';
        $data['description'] = (isset($row->description))? $row->description : '';
        $data['keywords'] = (isset($row->keywords))? $row->keywords : '';
        $data['favicon'] = (isset($row->favicon))? $row->favicon : '';

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        return View::make('painel.seo', $data);

    }

}
