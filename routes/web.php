<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\Listemail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PainelController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logoff', [LoginController::class, 'logoff']);

Route::get('/perfil', [PerfilController::class, 'minhaconta']);
Route::post('/perfil', [PerfilController::class, 'minhaconta']);
Route::post('/perfil/upload', [PerfilController::class, 'upload']);

Route::get('/sendmail', [Listemail::class, 'sendmail']);

Route::get('/painel', [PainelController::class, 'index']);
Route::get('/pagina/form/{id}/{get?}', [PaginaController::class, 'form']);
Route::get('/pagina/editarConteudo/{codpagina}/{codconteudo}', [PaginaController::class, 'editarConteudo']);
Route::post('/pagina/editarConteudo/{codpagina}/{codconteudo}', [PaginaController::class, 'editarConteudo']);
Route::post('/pagina/form/{id}/{get?}', [PaginaController::class, 'form']);
Route::get('/pagina/excluirConteudo/{codpagina}/{codconteudo}', [PaginaController::class, 'excluirConteudo']);
Route::get('/pagina/imagens/{id}/{codconteudo}/{get?}', [PaginaController::class, 'imagens']);
Route::post('/pagina/imagens/{id}/{codconteudo}/{get?}', [PaginaController::class, 'imagens']);
Route::get('/pagina/delimg/{codimage}', [PaginaController::class, 'delimg']);
Route::get('/pagina/getSubCategorias/{codcategoria}', [PaginaController::class, 'getSubCategorias']);
Route::get('/pagina/arquivos/{codpagina}/{codconteudo}/{get?}', [PaginaController::class, 'arquivos']);
Route::post('/pagina/arquivos/{codpagina}/{codconteudo}', [PaginaController::class, 'arquivos']);
Route::get('/pagina/delarq/{codpagina}/{codconteudo}/{codarquivo}', [PaginaController::class, 'delarq']);
Route::get('/pagina/comentarios/{codpagina}/{codconteudo}', [PaginaController::class, 'comentarios']);
Route::get('/pagina/statusComentario/{codpagina}/{codconteudo}/{codcomentario}/{status}', [PaginaController::class, 'statusComentario']);
Route::get('/pagina/excluirComentario/{codpagina}/{codconteudo}/{codcomentario}', [PaginaController::class, 'excluirComentario']);

Route::get('/painel/seo/{get?}', [PainelController::class, 'seo']);
Route::post('/painel/seo', [PainelController::class, 'seo']);
