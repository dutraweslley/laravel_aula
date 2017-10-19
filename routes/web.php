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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios/{usuarios}/{outro}', function($usuario, $outro) {
		echo "Bem vindo, {$usuario} {$outro}";
});

route::get("/blog", function(){
	echo "<h1><i>Seja bem vindo a pagina de blog</i></h1>";
});

route::get("/blog/adm", function(){
	echo "<h1><b>Pagina Administrativa</b></h1>";
});

Route::get('/usuarios/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function($usuario1, $usuario2, $usuario3, $usuario4) {
		echo "<table border align='center'>
				<tr>
					<th>Nome de Usuarios</th>
				</tr>
				<tr>
					<td>{$usuario1}</td>
				</tr>
				<tr>
					<td>{$usuario2}</td>
				</tr>
				<tr>
					<td>{$usuario3}</td>
				</tr>
				<tr>
					<td>{$usuario4}</td>
				</tr>	
			  </table>		
		";
});

Route::get('/{num1}/{num2}/{num3}/{num4}/{num5}', function($num1, $num2, $num3, $num4, $num5) {
	$nota = $num1 + $num2 + $num3 + $num4 + $num5;
	$media = $nota/5;
		echo "<table border=1px solid; aling=center>
				<tr>
					<th>Media</th>
				</tr>
				<tr>
					<td>A media final é: {$media}</td>
				</tr>
			
			  </table>		
		";
});

Route::get('/{nome1}/{nome2}', function($usuario1, $usuario2) {
	if($usuario1==$usuario2){
		echo "OS NOMES SÃO IGUAIS";
	}else{
		echo"Seja bem vindos <strong>{$usuario1} e {$usuario2}</strong>";
	}
});

Route::get('/nomes/{nome1}/{nome2}/{nome3}', function ($nome1, $nome2, $nome3) {
    return view('nomes', ['nome1'=> $nome1,'nome2'=> $nome2, 'nome3'=> $nome3]);
});

Route::get('/numeros/{num1}/{num2}/', function ($num1, $num2) {
    return view('numeros', ['num1'=> $num1,'num2'=> $num2]);
});