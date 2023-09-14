<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Componentes extends Model
{
    use HasFactory;

    public static function getCategorias($codpagina, $codconteudo = NULL, $codcategoria = NULL) {

        $qry = DB::table('categoria')->select('*')
            ->where('codpagina', '=', $codpagina)->count();
        if($qry != 0){
            $categorias = DB::table('categoria')->select('*')
                ->where('codpagina', '=', $codpagina)
                ->get();

            $data['categorias'] = $categorias;
            $data['codcategoria'] = $codcategoria;
            return View::make('paginas.categorias', $data);

        }else{
            return '';
        }

    }

    public static function getSubCategorias($codcategoria){

        $qry = DB::table('subcategoria')->select('*')
            ->where('codcategoria', '=', $codcategoria)
            ->count();

        if($qry != 0){

            $subcategorias = DB::table('subcategoria')->select('*')
                ->where('codcategoria', '=', $codcategoria)
                ->get();

            $data['subcategorias'] = $subcategorias;
            return View::make('paginas.subcategorias', $data);

        }else{
            return '';
        }

    }

    public static function getCampo($codpagina, $codconteudo = NULL){

        $qry = DB::table('campogenerico')->select('*')
            ->where('codpagina', '=', $codpagina)
            ->get();

        $lista = '';

        if($codconteudo != NULL){
            foreach ($qry as $row){

                $codcampo = $row->codcampo;

                $valor = DB::table('campovalor')->select('*')
                    ->where('codcampo', '=', $codcampo)
                    ->where('codconteudo', '=', $codconteudo)
                    ->first();

                $lista .='<div class="form-group">
					<label class="col-md-3 control-label">'.$row->nome.'</label>
					<div class="col-md-9">
						<input type="text" name="'.$row->campo.'" value="'.$valor->valor.'" class="form-control" placeholder="Preencha o campo">
					</div>
				</div>';
            }
        }else{
            foreach ($qry as $row){

                $lista .='<div class="form-group">
					<label class="col-md-3 control-label">'.$row->nome.'</label>
					<div class="col-md-9">
						<input type="text" name="'.$row->campo.'" class="form-control" placeholder="Preencha o campo">
					</div>
				</div>';
            }
        }

        return $lista;

    }

    public static function getErro($erro, $tipo = NULL) {
        $msg = '';
        switch ($erro) {
            case 'inserido' :
                $msg = '<div class="note note-success note-shadow"><p>'.$tipo.' foi insedido com sucesso!</p></div>';
                break;

            case 'atualizado' :
                $msg = '<div class="note note-success note-shadow"><p>'.$tipo.' foi atualizado com sucesso!</p></div>';
                break;

            case 'excluido' :
                $msg = '<div class="note note-success note-shadow"><p>'.$tipo.' foi excluído com sucesso!</p></div>';
                break;

            case 'erro' :
                $msg = '<div class="note note-danger note-shadow"><p>Erro! tente novamente mais tarde.</p></div>';
                break;

            case 'bonus-invalido':
                $msg = '<div class="note note-danger note-shadow"><p>Usuário não tem bônus suficiente!</p></div>';
                break;
        }
        return $msg;
    }

}
