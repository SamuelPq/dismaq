<?php

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

// Route::get('/teste', function () {
//     return view('teste');
// });
// Route::get('/sobre', function () {
//     return view('sobre');
// });

Auth::routes();
Route::get('/produto/{id}', 'site\ProdutoController@index')->name('site.produto');
Route::get('/subcategoria/{id}', 'site\HomeController@sub')->name('site.subcategoria');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'site\HomeController@index')->name('site.index');
Route::get('/pesquisa', 'site\HomeController@pesquisa')->name('site.pesquisa');
Route::get('/contato', 'site\HomeController@contato')->name('site.contato');
Route::get('/parceiro', 'site\HomeController@parceiro')->name('site.parceiro');
Route::get('/sobre', 'site\HomeController@sobre')->name('site.sobre');
Route::post('/contato/enviar', 'site\HomeController@enviarContato')->name('site.contato.enviar');

Route::get('/adminsam', function () {
    return view('admin._principal.index');
})->name('adminsam.principal');

//Marcas
Route::get('adminsam/marca', 'admin\MarcaController@index')->name('adminsam.marca');
Route::get('adminsam/marca/adicionar', 'admin\MarcaController@adicionar')->name('adminsam.marca.adicionar');
Route::post('adminsam/marca/salvar', 'admin\MarcaController@salvar')->name('adminsam.marca.salvar');
Route::get('adminsam/marca/editar/{id}', 'admin\MarcaController@editar')->name('adminsam.marca.editar');
Route::put('adminsam/marca/atualizar/{id}', 'admin\MarcaController@atualizar')->name('adminsam.marca.atualizar');
Route::get('adminsam/marca/deletar/{id}', 'admin\MarcaController@deletar')->name('adminsam.marca.deletar');

//Disponibilidades
Route::get('adminsam/disponibilidade', 'admin\DisponibilidadeController@index')->name('adminsam.disponibilidade');
Route::get('adminsam/disponibilidade/adicionar', 'admin\DisponibilidadeController@adicionar')->name('adminsam.disponibilidade.adicionar');
Route::post('adminsam/disponibilidade/salvar', 'admin\DisponibilidadeController@salvar')->name('adminsam.disponibilidade.salvar');
Route::get('adminsam/disponibilidade/editar/{id}', 'admin\DisponibilidadeController@editar')->name('adminsam.disponibilidade.editar');
Route::put('adminsam/disponibilidade/atualizar/{id}', 'admin\DisponibilidadeController@atualizar')->name('adminsam.disponibilidade.atualizar');
Route::get('adminsam/disponibilidade/deletar/{id}', 'admin\DisponibilidadeController@deletar')->name('adminsam.disponibilidade.deletar');

//Categorias
Route::get('adminsam/categoria', 'admin\CategoriaController@index')->name('adminsam.categoria');
Route::get('adminsam/categoria/adicionar', 'admin\CategoriaController@adicionar')->name('adminsam.categoria.adicionar');
Route::post('adminsam/categoria/salvar', 'admin\CategoriaController@salvar')->name('adminsam.categoria.salvar');
Route::get('adminsam/categoria/editar/{id}', 'admin\CategoriaController@editar')->name('adminsam.categoria.editar');
Route::put('adminsam/categoria/atualizar/{id}', 'admin\CategoriaController@atualizar')->name('adminsam.categoria.atualizar');
Route::get('adminsam/categoria/deletar/{id}', 'admin\CategoriaController@deletar')->name('adminsam.categoria.deletar');

//SubCategorias
Route::get('adminsam/subcategoria', 'admin\SubCategoriaController@index')->name('adminsam.subcategoria');
Route::get('adminsam/subcategoria/adicionar', 'admin\SubCategoriaController@adicionar')->name('adminsam.subcategoria.adicionar');
Route::post('adminsam/subcategoria/salvar', 'admin\SubCategoriaController@salvar')->name('adminsam.subcategoria.salvar');
Route::get('adminsam/subcategoria/editar/{id}', 'admin\SubCategoriaController@editar')->name('adminsam.subcategoria.editar');
Route::put('adminsam/subcategoria/atualizar/{id}', 'admin\SubCategoriaController@atualizar')->name('adminsam.subcategoria.atualizar');
Route::get('adminsam/subcategoria/deletar/{id}', 'admin\SubCategoriaController@deletar')->name('adminsam.subcategoria.deletar');

//Produtos
Route::get('adminsam/produto', 'admin\ProdutoController@index')->name('adminsam.produto');
Route::get('adminsam/produto/adicionar', 'admin\ProdutoController@adicionar')->name('adminsam.produto.adicionar');
Route::post('adminsam/produto/salvar', 'admin\ProdutoController@salvar')->name('adminsam.produto.salvar');
Route::get('adminsam/produto/editar/{id}', 'admin\ProdutoController@editar')->name('adminsam.produto.editar');
Route::put('adminsam/produto/atualizar/{id}', 'admin\ProdutoController@atualizar')->name('adminsam.produto.atualizar');
Route::get('adminsam/produto/deletar/{id}', 'admin\ProdutoController@deletar')->name('adminsam.produto.deletar');
