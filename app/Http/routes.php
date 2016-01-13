<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('aereo', 'aereoController');
Route::resource('agente', 'agenteController');
Route::resource('cliente', 'clienteController');
Route::resource('documento', 'documentoController');
Route::resource('file', 'FileController');
Route::resource('notafiscal', 'notafiscalController');
Route::resource('termo', 'termoController');
Route::resource('mbl', 'MblController');
Route::resource('hbl', 'HblController');

//Route::get('home', 'MblController@menuagente');
    


Route::resource('email', 'MblController@email');
Route::resource('mail', 'MailController');
Route::resource('aereo', 'aereoController');
Route::resource('listareg', 'MblController@reg');
Route::resource('notafiscal', 'notafiscalController');

//Enviar e-mails
Route::resource('previsaodechegada', 'MailController@previsaodechegada');
Route::resource('contato', 'MailController@store');
Route::resource('enviarprealerta', 'MailController@enviarprealerta');
Route::resource('prealertarecebido', 'MailController@prealertarecebido');





//faturamento maritimo
Route::get('faturamentomaritimo', 'faturamentoController@faturamentomaritimo');
Route::resource('faturarmaritimo', 'faturamentoController@faturarmaritimo');
Route::resource('concluirfaturamentomaritimo', 'faturamentoController@concluirfaturamentomaritimo');
Route::resource('faturamento', 'faturamentoController');
Route::resource('listarafaturar', 'faturamentoController@listarafaturar');
Route::resource('regfat', 'faturamentoController@regfat'); // listar faturamento admim
//faturmento aereo
Route::get('faturamentoaereo', 'faturamentoController@faturamentoaereo');
Route::resource('faturaraereo', 'faturamentoController@faturaraereo');
Route::resource('concluirfaturamentoaereo', 'faturamentoController@concluirfaturamentoaereo');
Route::resource('listarafaturaraereo', 'faturamentoController@listarafaturaraereo');




Route::resource('agente', 'agenteController');
Route::resource('/', 'MblController@menu');
Route::resource('menuagente', 'MblController@menuagente');
Route::resource('faturamentoagentes', 'faturamentoController@faturamentoagentes'); // listar faturamento agente



Route::resource('regfatar', 'aereoController@regfatar'); // listar faturamento aéreo admin
Route::resource('agefatar', 'aereoController@agefatar'); // listar faturamento aéreo agente
Route::resource('listaregar', 'aereoController@listaregar'); // listagem registros aéreos agente


// middleware
Route::get('listareg', ['middleware' => 'agentemid', 'uses' => 'MblController@listareg']); // listagem registros maritimos agente
Route::get('prevchegada', 'MblController@prevchegada'); // previsão chegada admin
//Route::get('prevchegadaagente', 'maritimoController@prevchegadaagente'); // previsão chegada agente
//Route::get('prevchegada', ['middleware' => 'adminmid', 'uses' => 'maritimoController@prevchegada']);
Route::get('mbl', ['middleware' => 'adminmid', 'uses' => 'MblController@index']);
//Route::get('aereo', ['middleware' => 'adminmid', 'uses' => 'aereoController@index']);
//Route::get('regfat', ['middleware' => 'adminmid', 'uses' => 'maritimoController@regfat']);




// upload 

Route::get('selecagente', 'FileController@selecagente');
Route::resource('fileup', 'FileController@fileup');
Route::resource('fileupagente', 'FileController@fileupagente');
Route::post('multiple_upload', ['as' => 'files.upload', 'uses' => 'FileController@multiple_upload']);
Route::post('upload', ['as' => 'files.upload', 'uses' => 'FileController@upload']);
Route::get('usuario/{userId}/download/{fileId}', ['as' => 'files.download', 'uses' => 'FileController@download']);
Route::get('usuario/{userId}/remover/{fileId}', ['as' => 'files.destroy', 'uses' => 'FileController@destroy']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Termo de container
Route::post('termo/upload', 'termoController@upload');
Route::get('termo/sign/{id}', 'termoController@showSign');

Route::resource('usuarios', 'usuariosController');

Route::get('/pdf', function() {

$pdf = PDF::loadView('welcome');
//return $pdf->stream();
return $pdf->download('welcome.pdf');

});