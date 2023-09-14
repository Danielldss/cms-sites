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

class PaginaController extends Controller
{
    public function form($id, $get = null, Request $request) {
        Login::sessionDomain();
        $pg = DB::table('pagina')->select('*')
            ->where('codpagina', '=', $id)
            ->first();

        if($request->method() == 'POST') {

            $dataInsertConteudo = [
                "title" => $request->get('title'),
                "description" => $request->get('description'),
                "slug" => ($request->get('slug') != '')? HTMLhelp::slug($request->get('slug')) : HTMLhelp::slug($request->get('titulo')),
                "titulo" => $request->get('titulo'),
                "subtitulo" => $request->get('subtitulo'),
                "dtcadastro" => ($request->get('dtcadastro'))? HTMLhelp::dataUS($request->get('dtcadastro')) : date('Y-m-d'),
                "codcategoria" => ( $request->get('codcategoria'))?  $request->get('codcategoria') : null,
                "codsubcategoria" => ($request->get('codsubcategoria'))? $request->get('codsubcategoria') : null,
                "codpagina" => $id,
                "texto" => $request->get('texto'),
            ];

            $conteudo = Conteudo::create($dataInsertConteudo);
            $codconteudo = $conteudo->codconteudo;

//            "restrita" => $request->get('restrita'),
//                "dtexpiracao" => $request->get('dtexpiracao'),

            $qry = DB::table('campogenerico')->select('*')
                ->where('codpagina', '=', $id)
                ->get();

            foreach ($qry as $campo){
                $codcampo = $campo->codcampo;
                $nomcampo = $campo->campo;
                $valor = $request->get($nomcampo);

                $data = [
                    'codcampo' => $codcampo,
                    'valor' => $valor,
                    'codconteudo' => $codconteudo,
                    'codpagina' => $id
                ];

                DB::table('campovalor')->insert([$data]);
            }

            if($request->hasFile('imagens')) {

                foreach ($request->file('imagens') as $file) {

                    // Retorna mime type do arquivo (Exemplo image/png)
                    $file->getMimeType();

                    // Extensão do arquivo
                    $ext = $file->getClientOriginalExtension();

                    // Tamanho do arquivo
                    $size = $file->getSize();

                    $aExtensoes = ["jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif"];
                    $MaxTam = 1024 * 5120;

                    if($size > $MaxTam) {
                        return redirect()->to('/pagina/imagens/'.$id.'/'.$codconteudo.'/erro')->send();
                    }

                    if(!in_array($ext, $aExtensoes) ) {
                        return redirect()->to('/pagina/imagens/'.$id.'/'.$codconteudo.'/erro')->send();
                    }

                    // Retorna o nome original do arquivo
                    $nameFile = md5($file->getClientOriginalName().time()).".".$ext;
                    $filePath = 'uploads/galeria/'. $nameFile;

                    Storage::disk('digitalocean')->put($filePath, file_get_contents($file), 'public');
                    $url = 'https://noticiasdofront.nyc3.digitaloceanspaces.com/uploads/galeria/';

                    $dataImage = [
                        'imagem' => $nameFile,
                        'codconteudo' => $codconteudo,
                        'url' => $url,
                        'diretorio' => 'uploads/galeria/',
                        'title' => $request->get('titulo'),
                    ];

                    DB::table('imagens')->insert([$dataImage]);
                }

            }

            if($request->hasFile('arquivo')){

                foreach ($request->file('arquivo') as $file) {

                    // Retorna mime type do arquivo (Exemplo image/png)
                    $file->getMimeType();

                    // Extensão do arquivo
                    $ext = $file->getClientOriginalExtension();

                    // Tamanho do arquivo
                    $size = $file->getSize();

                    $MaxTam = 1024 * 40960;

                    if($size > $MaxTam) {
                        return redirect()->to('/pagina/form/'.$id.'/erro')->send();
                    }

                    // Retorna o nome original do arquivo
                    $nameFile = md5($file->getClientOriginalName().time()).".".$ext;
                    $filePath = 'uploads/arquivos/'. $nameFile;

                    Storage::disk('digitalocean')->put($filePath, file_get_contents($file), 'public');
                    $url = 'https://noticiasdofront.nyc3.digitaloceanspaces.com/uploads/arquivos/';

                    $dataArquivo = [
                        'arquivo' => $nameFile,
                        'codconteudo' => $codconteudo,
                        'codpagina' => $id,
                        'url' => $url,
                        'diretorio' => 'uploads/arquivos/',
                        'nome' => $request->get('titulo'),
                    ];

                    DB::table('arquivos')->insert([$dataArquivo]);

                }
            }

            return redirect()->to('/pagina/form/'.$id.'/inserido')->send();
        }

        $pagina = DB::table('pagina')->select('*')
            ->where('codpagina', '=', $id)
            ->first();

        $conteudos = DB::table('conteudo')->select('*')
            ->where('codpagina', '=', $id)
            ->orderBy('listorder', 'ASC')
            ->get();

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['conteudos'] = $conteudos;
        $data['codpagina'] = $id;
        $data['campos'] = Componentes::getCampo($id);
        $data['categorias'] = Componentes::getCategorias($id);
        $data['retorno'] = Componentes::getErro($get, 'Conteúdo');

        $data['pagina'] = $pagina->pagina;

        return View::make('paginas.formulario', $data);
    }

    public function list($id) {
        $conteudos = Conteudo::with('imagem')->where('codpagina', '=', $id)->get();
        return response()->json(['conteudos' => $conteudos]);
    }

    public function conteudo($slug) {
        $conteudos = Conteudo::with('imagem')->where('slug', '=', $slug)->first();
        return response()->json(['conteudo' => $conteudos]);
    }

    public function editarConteudo($codpagina, $codconteudo, Request $request){
        Login::sessionDomain();
        $pagina = DB::table('pagina')->where('codpagina', '=', $codpagina)->first();

        if($request->method() == 'POST'){
            $dataUpdate = [
                'titulo' => $request->get('titulo'),
                'subtitulo' => $request->get('subtitulo'),
                'dtcadastro' => ($request->get('dtcadastro'))? HTMLhelp::dataUS($request->get('dtcadastro')) : date('d/m/Y'),
                'codcategoria' => (@$request->get('codcategoria'))? @$request->get('codcategoria') : null,
                'codsubcategoria' => (@$request->get('codsubcategoria'))? @$request->get('codsubcategoria') : null,
                'texto' => $request->get('texto'),
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'slug' => $request->get('slug'),
            ];

            $update = Conteudo::where('codconteudo', '=', $codconteudo)->update($dataUpdate);

            $qry = DB::table('campogenerico')->where('codpagina', '=', $codpagina)->get();

            foreach ($qry as $campo){

                $codcampo = $campo->codcampo;
                $nomcampo = $campo->campo;
                $valor = $request->get($nomcampo);

                DB::table('campovalor')->where('codcampo', '=', $codcampo)
                    ->where('codconteudo', '=',  $codconteudo)
                ->update(['valor' => $valor]);

            }

            if($update){
                return redirect()->to('/pagina/form/'.$codpagina.'/atualizado')->send();
            }else{
                return redirect()->to('/pagina/form/'.$codpagina.'/erro')->send();
            }

        }

        $row = DB::table('conteudo')->select('*')
            ->where('codpagina', '=', $codpagina)
            ->where('codconteudo', '=', $codconteudo)
            ->first();

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['codconteudo'] = $codconteudo;
        $data['codpagina'] = $codpagina;
        $data['campos'] = Componentes::getCampo($codpagina, $codconteudo);
        $data['categorias'] = Componentes::getCategorias($codpagina, $codconteudo, $row->codcategoria);

        $data['titulo'] = $row->titulo;
        $data['slug'] = $row->slug;
        $data['subtitulo'] = $row->subtitulo;
        $data['texto'] = $row->texto;
        $data['title'] = $row->title;
        $data['description'] = $row->description;
        $data['dtcadastro'] = HTMLhelp::dataBR($row->dtcadastro);

        $data['pagina'] = $pagina->pagina;

        return View::make('paginas.formedit', $data);


    }

    public function imagens($id, $codconteudo, $get = null, Request $request){
        Login::sessionDomain();
        $ctn = DB::table('conteudo')->select('titulo')
            ->where('codconteudo', '=', $codconteudo)
            ->first();

        $title = $ctn->titulo;

        if($request->hasFile('imagens')) {

            foreach ($request->file('imagens') as $file) {

                // Retorna mime type do arquivo (Exemplo image/png)
                $file->getMimeType();

                // Extensão do arquivo
                $ext = $file->getClientOriginalExtension();

                // Tamanho do arquivo
                $size = $file->getSize();

                $aExtensoes = ["jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif"];
                $MaxTam = 1024 * 5120;

                if($size > $MaxTam) {
                    return redirect()->to('/pagina/imagens/'.$id.'/'.$codconteudo.'/erro')->send();
                }

                if(!in_array($ext, $aExtensoes) ) {
                    return redirect()->to('/pagina/imagens/'.$id.'/'.$codconteudo.'/erro')->send();
                }

                // Retorna o nome original do arquivo
                $nameFile = md5($file->getClientOriginalName().time()).".".$ext;
                $filePath = 'uploads/galeria/'. $nameFile;

                Storage::disk('digitalocean')->put($filePath, file_get_contents($file), 'public');
                $url = 'https://noticiasdofront.nyc3.digitaloceanspaces.com/uploads/galeria/';

                $dataImage = [
                    'imagem' => $nameFile,
                    'codconteudo' => $codconteudo,
                    'url' => $url,
                    'diretorio' => 'uploads/galeria/',
                    'title' => $title,
                ];

                DB::table('imagens')->insert([$dataImage]);
            }

            return redirect()->to('/pagina/imagens/'.$id.'/'.$codconteudo.'/inserido')->send();

        }

        $pagina = DB::table('pagina')->select('pagina')
            ->where('codpagina', '=', $id)
            ->first();


        $imagens = DB::table('imagens')->select('*')
            ->where('codconteudo', '=', $codconteudo)
            ->get();

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['pagina'] = $pagina->pagina;
        $data['codpagina'] = $id;
        $data['codconteudo'] = $codconteudo;
        $data['titulo'] = $title;
        $data['retorno'] = Componentes::getErro($get, 'Imagen(s)');
        $data['imagens'] = $imagens;

        return View::make('paginas.imagens', $data);

    }

    public function delimg($codimage){
        Login::sessionDomain();
        DB::table('imagens')->where('codimage', '=', $codimage)->delete();
        return redirect()->back();
    }

    public function getSubCategorias($codcategoria) {
        $subcategorias = Componentes::getSubCategorias($codcategoria);
        echo $subcategorias;
    }

    public function arquivos($codpagina, $codconteudo, $get = null, Request $request){
        Login::sessionDomain();
        $pagina = DB::table('pagina')->select('pagina')
            ->where('codpagina', '=', $codpagina)
            ->first();

        if($request->hasFile('arquivo')){

            foreach ($request->file('arquivo') as $file) {

                // Retorna mime type do arquivo (Exemplo image/png)
                $file->getMimeType();

                // Extensão do arquivo
                $ext = $file->getClientOriginalExtension();

                // Tamanho do arquivo
                $size = $file->getSize();

                $MaxTam = 1024 * 40960;

                if($size > $MaxTam) {
                    return redirect()->to('/pagina/arquivos/'.$codpagina.'/'.$codconteudo.'/erro')->send();
                }

                // Retorna o nome original do arquivo
                $nameFile = md5($file->getClientOriginalName().time()).".".$ext;
                $filePath = 'uploads/arquivos/'. $nameFile;

                Storage::disk('digitalocean')->put($filePath, file_get_contents($file), 'public');

                $url = 'https://noticiasdofront.nyc3.digitaloceanspaces.com/uploads/arquivos/';

                $dataArquivo = [
                    'arquivo' => $nameFile,
                    'codconteudo' => $codconteudo,
                    'codpagina' => $codpagina,
                    'url' => $url,
                    'diretorio' => '/uploads/arquivos/',
                    'nome' => $request->get('nome'),
                ];

                DB::table('arquivos')->insert([$dataArquivo]);

            }

            return redirect()->to('/pagina/arquivos/'.$codpagina.'/'.$codconteudo.'/inserido')->send();

        }

        $arquivos = DB::table('arquivos')->select('*')
            ->where('codconteudo', '=', $codconteudo)
            ->get();

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['pagina'] = $pagina->pagina;
        $data['codpagina'] = $codpagina;
        $data['codconteudo'] = $codconteudo;
        $data['retorno'] = Componentes::getErro($get, 'Arquivo(s)');
        $data['arquivos'] = $arquivos;

        return View::make('paginas.arquivos', $data);

    }

    public function delarq($codpagina, $codconteudo, $codarquivo){
        Login::sessionDomain();
        DB::table('arquivos')->where('codarquivo', '=', $codarquivo)->delete();
        return redirect()->to('/pagina/arquivos/'.$codpagina.'/'.$codconteudo.'/excluido')->send();
    }

    public function excluirConteudo($codpagina, $codconteudo){
        Login::sessionDomain();

        DB::table('imagens')->where('codconteudo', '=', $codconteudo)->delete();
        DB::table('arquivos')->where('codconteudo', '=', $codconteudo)->delete();
        DB::table('campovalor')->where('codconteudo', '=', $codconteudo)->delete();
        $delete = DB::table('conteudo')->where('codconteudo', '=', $codconteudo)->delete();

        if($delete){
            return redirect()->to('/pagina/form/'.$codpagina.'/excluido')->send();
        }else{
            return redirect()->to('/pagina/form/'.$codpagina.'/erro')->send();
        }

    }

    public function comentarios($codpagina, $codconteudo){
        Login::sessionDomain();

        $pagina = DB::table('pagina')->where('codpagina', '=', $codpagina)->first();

        $ctn = DB::table('conteudo')->where('codconteudo', '=', $codconteudo)->first();
        $title = $ctn->titulo;

        $comentarios = DB::table('comentarios')->select('*')
            ->where('codconteudo', '=', $codconteudo)
            ->get();

        $data['menu'] = Menu::principal();
        $data['header'] = Headers::header();
        $data['footer'] = Headers::footer();
        $data['pagina'] = $pagina->pagina;
        $data['codpagina'] = $codpagina;
        $data['codconteudo'] = $codconteudo;
        $data['titulo'] = $title;
        $data['comentarios'] = $comentarios;

        return View::make('paginas.comentarios', $data);

    }

    public function statusComentario($codpagina, $codconteudo, $codcomentario, $status){
        Login::sessionDomain();

        DB::table('comentarios')->where('codcomentario', '=', $codcomentario)
            ->update(['ativo' => $status]);

        return redirect()->to('/pagina/comentarios/'.$codpagina.'/'.$codconteudo)->send();

    }

    public function excluirComentario($codpagina, $codconteudo, $codcomentario){
        Login::sessionDomain();

        DB::table('comentarios')->where('codcomentario', '=', $codcomentario)->delete();
        return redirect()->to('/pagina/comentarios/'.$codpagina.'/'.$codconteudo)->send();

    }

}
