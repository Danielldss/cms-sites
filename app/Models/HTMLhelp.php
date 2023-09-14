<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HTMLhelp extends Model
{
    use HasFactory;

    public static function getOptions($opcoes, $sel = NULL) {
        $lista = NULL;

        foreach ($opcoes as $opcao) {
            $opcao = (object) $opcao;
            $lista .= "\n";
            $lista .= "<option value='".$opcao->codigo."'".(($opcao->codigo == $sel)? " selected='selected'" : "").">";
            $lista .= $opcao->valor;
            $lista .= "</option>";
        }
        return $lista;
    }

    public static function dataBR($data){
        $datatime = explode(' ', $data);
        $data	= $datatime[0];
        $nDate 	= implode('/', array_reverse(explode('-', $data)));
        return $nDate;
    }

    public static function dataUS($data){
        $nDate 	= implode('-', array_reverse(explode('/', $data)));
        return $nDate;
    }

    public static function dataTimeBR($data){
        $datatime = explode(' ', $data);
        $data	= $datatime[0];
        $nDate 	= implode('/', array_reverse(explode('-', $data)));
        return $nDate.' às '.$datatime[1];
    }

    public static function horaTimeBR($data){
        $datatime 	= explode(' ', $data);
        $hora		= $datatime[1];
        return $hora;
    }

    public static function dataTimeForDate($data){
        $datatime = explode(' ', $data);
        $data	= $datatime[0];
        $nDate 	= implode('/', array_reverse(explode('-', $data)));
        return $nDate;
    }

    public static function decimal($decimal){
        $decimal = str_replace(".", "", $decimal);
        $decimal = str_replace(",", ".", $decimal);
        return $decimal;
    }

    public static function valor($decimal){
        $decimal = str_replace(".", "", $decimal);
        $decimal = number_format($decimal / 100, 2, ',', '.');
        return $decimal;
    }

    public static function fmtDecimal($valor){
        $valor = number_format($valor, "2", ",", ".");
        return $valor;
    }

    public static function numerico($valor){
        $trocarIsso = array(",",'.',);
        $porIsso = array("",'',);
        $titletext = str_replace($trocarIsso, $porIsso, $valor);
        return strtolower($titletext);
    }

    public static function slug($nome){
        $trocarIsso = array(".", "'", ',', '´', '%', '/', '”', "'",'-','(', ')', '!', '?', ' ','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ü','ú','ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','O','Ù','Ü','Ú','Ÿ',);
        $porIsso = array('-', '','-','', '','', '', "",'','', '','', '', '-','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','y','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','o','U','U','U','Y',);
        $titletext = str_replace($trocarIsso, $porIsso, $nome);
        return strtolower($titletext);
    }

    public static function json($nome){
        $trocarIsso = array('[', ']',);
        $porIsso = array('','',);
        $titletext = str_replace($trocarIsso, $porIsso, $nome);
        return strtolower($titletext);
    }

    public static function porcentagem( $porcentagem, $total ) {
        $valor = ( $porcentagem / 100 ) * $total;
        return (int) $valor;
    }

    public static function dataPagto($data){

        $datatime = explode('T', $data);
        $datatime = $datatime[0];
        $time = explode('.', $datatime[1]);
        $time = $time[0];

        return $datatime.' '.$time;

    }

    public static function geraVoucher($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false){
        $lmin = 'abcdefghijklmnopqrstuvwxyz';
        $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';
        $simb = '!@#$%*-&';
        $retorno = '';
        $caracteres = '';
        $caracteres .= $lmin;
        if ($maiusculas) $caracteres .= $lmai;
        if ($numeros) $caracteres .= $num;
        if ($simbolos) $caracteres .= $simb;
        $len = strlen($caracteres);
        for ($n = 1; $n <= $tamanho; $n++) {
            $rand = mt_rand(1, $len);
            $retorno .= $caracteres[$rand-1];
        }
        return $retorno;
    }

}
